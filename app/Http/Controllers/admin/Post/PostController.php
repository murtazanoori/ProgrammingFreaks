<?php

namespace App\Http\Controllers\admin\Post;

use App\Models\Post;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{
    //
    public function Post_show(){
        $posts = Post::with('Pcatcon.Catcon')->get();
        return view('Posts.admin_show_posts', compact('posts'));
    }

    public function Post_create(){
        $sub_categories = SubCategory::with('Catcon')->get();
        return view('Posts.admin_create_posts',compact('sub_categories'));
    }

    public function Post_store(Request $request){
        $request->validate([

            'post_title' => 'required',
            'post_details' => 'required',
            'post_picture' => 'required|image|mimes:jpg,jpeg,png,gif'
        ]);

        $q = DB::select("SHOW TABLE STATUS LIKE 'posts'");
        $ai_id = $q[0]->Auto_increment;

        // Ai_id means auto increment ID for our Tags table so when a Post is inserted into Posts Table ,
        // then we need to have the Auto-increment ID so we can insert data into the Tags Table with the help of Auto Increment

        $post = new Post();

        if($request->hasFile('post_picture')){

            $file = $request->file('post_picture');
            $exe = $file->getClientOriginalExtension();
            $filename = 'Post_'.microtime().'.'.$exe;
            $file->move('uploads/users/',$filename );
         }

        $post ->sub_category_id = $request->sub_category_id;
        $post ->post_title = $request->post_title;
        $post ->post_details = $request->post_details;
        $post->visitors = 1;
        $post->author_id = 0;
        $post->admin_id = Auth::user()->id;
        $post->is_share = $request->is_share;
        $post->is_comment = $request->is_comment;
        $post->post_picture =$filename;
        $post->save();

       if ($request->tags !='') {

        $tags_array_new = [];
        $tags_array = explode(',',$request->tags);
        for ($i=0; $i <count($tags_array); $i++) {

            $tags_array_new[]= trim($tags_array[$i]);
        }
        $tags_array_new = array_values(array_unique($tags_array_new));
        for ($i=0; $i <count($tags_array_new); $i++) {

            $tag = new Tag();
            $tag->post_id = $ai_id;
            $tag->tag_name = trim($tags_array_new[$i]);
            $tag->save();
        }

        return redirect()->route('Post.all')->with('success', 'Tag Has Been Successfully Added');

       }

    }

    public function Post_edit($id){
        $sub_categories = SubCategory::with('Catcon')->get();
        $existing_tags = Tag::where('post_id', $id)->get();
        $post_single = Post::where('id', $id)->first();
        return view('Posts.admin_edit_posts',compact('sub_categories','existing_tags', 'post_single'));
    }

    public function Post_update(Request $request,$id){


        $request->validate([

            'post_title' => 'required',
            'post_details' => 'required',

        ]);

        $post = Post::where('id',$id)->first();
        if($request->hasFile('post_picture')){

            $request->validate([
                'post_picture' => 'required|image|mimes:jpg,jpeg,png,gif'
            ]);

            $file = $request->file('post_picture');
            $exe = $file->getClientOriginalExtension();
            $filename = 'Post_'.microtime().'.'.$exe;
            $file->move('uploads/users/',$filename );
            $post->post_picture =$filename;
         }


        $post ->sub_category_id = $request->sub_category_id;
        $post ->post_title = $request->post_title;
        $post ->post_details = $request->post_details;
        $post->visitors = 1;
        $post->author_id = 0;
        $post->admin_id = Auth::user()->id;
        $post->is_share = $request->is_share;
        $post->is_comment = $request->is_comment;

        $post->update();

        if ($request->tags != '') {

            $tags_array = explode(' ', $request->tags);
            for ($i=0; $i<count($tags_array); $i++) {

                $total = Tag::where('post_id',$id)->where('tag_name',trim($tags_array[$i]))->count();

                if (!$total) {
                $tag = new Tag();
                $tag->post_id = $id;
                $tag->tag_name = trim($tags_array[$i]);
                $tag->save();
                }
            }
        }
        return redirect()->route('Post.all')->with('success', 'Post Successfully Updated!');
    }

    public function delete_tag($id,$id1){
        $tag = Tag::where('id',$id)->first();
        $tag->delete();
        return redirect()->route('Post.edit',$id1)->with('success', 'Tag is Successfully Deleted');
    }

    public function Post_delete($id){

        $post = Post::where('id',$id)->first();
        unlink(public_path('uploads/users/'.$post->post_picture));
        $post->delete();
        Tag::where('post_id',$id)->first();
        return redirect()->route('Post.all')->with('success', 'Post Successfully Deleted');
    }


}
