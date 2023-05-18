<?php

namespace App\Http\Controllers\admin\category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryControler extends Controller
{
    //
    public function show_category(){
        $category_data = Category::orderBy('category_order', 'asc')->get();
        return view('Categories.admin_category_show', compact('category_data'));
    }

    public function create_category(){
        return view('Categories.admin_category_create');
    }

    public function category_store(Request $request){

        $request->validate([
            'category_name' => 'required',
            'category_order' => 'required',

        ]);

        $category_data = new Category();

        $category_data->category_name = $request->input('category_name');
        $category_data->show_menu = $request->input('show_menu');
        $category_data->category_order = $request->input('category_order');

        $category_data->save();

        return redirect()->route('category.all')->with('sucess', 'Category Added Successfully');
    }

    public function category_update(Request $request,$id){

        $request->validate([
            'category_name' => 'required',
            'category_order' => 'required'

        ]);


        $category_data = Category::where('id', $id)->first();

        $category_data->category_name = $request->input('category_name');
        $category_data->show_menu = $request->input('show_menu');
        $category_data->category_order = $request->input('category_order');
        $category_data->update();
        return redirect()->route('category.all')->with('sucess', 'Category Updated Successfully');
    }

    public function category_edit($id){
       $category_data = Category::where('id', $id)->first();
       return view('Categories.admin_category_edit', compact('category_data'));
    }

    public function category_delete($id){
        Category::FindOrFail($id)->delete();
        return redirect()->back()->with('sucess', 'Category Deleted Successfully');
    }

}
