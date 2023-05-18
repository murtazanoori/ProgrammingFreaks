<?php

namespace App\Http\Controllers\admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class Sub_CategoriesController extends Controller
{
    //

    public function sub_show_category(){
        $sub_category = SubCategory::with("Catcon")->orderBy('sub_category_order', 'asc')->get();
        return view('Categories.Sub_Categories.sub_category_view',compact('sub_category'));
    }

    public function sub_create_category (){
        $categories = Category::orderBy('category_order', 'asc')->get();
        return view('Categories.Sub_Categories.sub_category_create', compact('categories'));

    }

    public function sub_category_edit($id){
        $categories = Category::orderBy('category_order', 'asc')->get();
        $sub_category = SubCategory::where('id',$id)->first();

        return view('Categories.Sub_Categories.sub_category_edit', compact('categories', 'sub_category'));
    }



    public function sub_category_store (Request $request){
        $request->validate([
            'sub_category_name' => 'required',
            'sub_category_order' => 'required',

        ]);

        $sub_category = new SubCategory();

        $sub_category->sub_category_name = $request->input('sub_category_name');
        $sub_category->sub_category_status = $request->input('sub_category_status');
        $sub_category->sub_category_order = $request->input('sub_category_order');
        $sub_category->category_id = $request->category_id;
        $sub_category->save();

        return redirect()->route('sub_category.all')->with('sucess', 'Sub Category Added Successfully');
    }

    public function sub_category_update(Request $request,$id){

        $request->validate([
            'sub_category_name' => 'required',
            'sub_category_order' => 'required'

        ]);


        $sub_category = SubCategory::where('id', $id)->first();

        $sub_category->sub_category_name = $request->input('sub_category_name');
        $sub_category->sub_category_status = $request->input('sub_category_status');
        $sub_category->sub_category_order = $request->input('sub_category_order');
        $sub_category->category_id = $request->category_id;
        $sub_category->update();
        return redirect()->route('sub_category.all')->with('sucess', 'Sub Category Updated Successfully');
    }

    public function sub_category_delete($id){

        $sub_category = SubCategory::where('id',$id)->first();
        $sub_category->delete();
        return redirect()->back()->with('sucess', 'Category Deleted Successfully');
    }

}
