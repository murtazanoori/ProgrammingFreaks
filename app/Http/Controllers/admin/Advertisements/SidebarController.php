<?php

namespace App\Http\Controllers\admin\Advertisements;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SidebarAdvertisement;
use Illuminate\Support\Facades\File;

class SidebarController extends Controller
{
    public function all(){
        $sidebar_Data = SidebarAdvertisement::all();
        return view('Sidebar_advertisement.sidebar_All', compact('sidebar_Data'));
    }

    public function create(){
        return view('Sidebar_advertisement.sidebar_create');
    }

    public function sidebar_store(Request $request){


        $sidebar_Data = new SidebarAdvertisement();


        $request->validate([
            'Top_sidebar_ad' => 'required|image|mimes:png,jpg,jpeg,gif,svg|max:5024'
        ],[],[
            'Top_sidebar_ad' => 'Top Sidebar Advertisement'
        ]);

        $sidebar_Data -> Top_sidebar_ad = $request->input('Top_sidebar_ad');
        $sidebar_Data -> Top_sidebar_url = $request->input('Top_sidebar_url');
        $sidebar_Data -> Top_sidebar_status = $request->input('Top_sidebar_status');
        $sidebar_Data -> Bottom_sidebar_ad = $request->input('Bottom_sidebar_ad');
        $sidebar_Data -> Bottom_sidebar_url = $request->input('Bottom_sidebar_url');
        $sidebar_Data -> Bottom_sidebar_status = $request->input('Bottom_sidebar_status');


        if ($request->hasFile('Top_sidebar_ad')) {

            $del = 'uploads/users/'.$sidebar_Data->Top_sidebar_ad;
            if (File::exists($del)) {
                # code...
                File::delete($del);
            }
            $file = $request->file('Top_sidebar_ad');
            $exe = $file->getClientOriginalExtension();
            $filename = 'Top_'.microtime().'.'.$exe;
            $file->move('uploads/users/', $filename);
            $sidebar_Data->Top_sidebar_ad = $filename;

        }

        $request->validate([
            'Bottom_sidebar_ad' => 'required|image|mimes:png,jpg,jpeg,gif,svg|max:5024'
        ],[],[
            'Bottom_sidebar_ad' => 'Bottom Sidebar Advertisement'
        ]);


        if ($request->hasFile('Bottom_sidebar_ad')) {

            $del = 'uploads/users/'.$sidebar_Data->Bottom_sidebar_ad;

            if (File::exists($del)) {
                # code...
                File::delete($del);
            }
            $file = $request->file('Bottom_sidebar_ad');
            $exe = $file->getClientOriginalExtension();
            $filename = 'Bottom_'.microtime().'.'.$exe;
            $file->move('uploads/users/', $filename);
            $sidebar_Data->Bottom_sidebar_ad = $filename;

        }
        $sidebar_Data->save();
        return redirect()->route('sidebar.all')->with('sucess', 'Advertisement Sucessfully inserted!!');
    }

    public function sidebar_update (Request $request, $id){

        $sidebar_Data = SidebarAdvertisement::FindOrFail($id);

        // we dont need validations when updating especially the Required validation



        // here we dont need to add the  $sidebar_Data -> Top_sidebar_ad = $request->input('Top_sidebar_ad'); code because
        // we have declared this code already inside the if function the code for updating the image so if we add it like this here
        // then it will not let us leave the field empty , i mean باید هر ۲ فیلد را ما باید عکسش را تغییر بدهیم اگر نی باز ارور میته که کالم
        // نل بوده نمی تواند پس اگر این کود را اضافه نکنیم به راحتی میتایم فیلد را با قیمت سابقیش بانیم و اپدیت هم کنیم
        // Took me along time to realise this its very importent


        $sidebar_Data -> Top_sidebar_url = $request->input('Top_sidebar_url');
        $sidebar_Data -> Top_sidebar_status = $request->input('Top_sidebar_status');

        $sidebar_Data -> Bottom_sidebar_url = $request->input('Bottom_sidebar_url');
        $sidebar_Data -> Bottom_sidebar_status = $request->input('Bottom_sidebar_status');


        if ($request->hasFile('Top_sidebar_ad')) {

            $del = 'uploads/users/'.$sidebar_Data->Top_sidebar_ad;
            if (File::exists($del)) {
                # code...
                File::delete($del);
            }
            $file = $request->file('Top_sidebar_ad');
            $exe = $file->getClientOriginalExtension();
            $filename = 'Top_'.microtime().'.'.$exe;
            $file->move('uploads/users/', $filename);
            $sidebar_Data->Top_sidebar_ad = $filename;
        }

        // we dont need validations when updating


        if ($request->hasFile('Bottom_sidebar_ad')) {

            $del = 'uploads/users/'.$sidebar_Data->Bottom_sidebar_ad;
            if (File::exists($del)) {
                # code...
                File::delete($del);
            }
            $file = $request->file('Bottom_sidebar_ad');
            $exe = $file->getClientOriginalExtension();
            $filename = 'Bottom_'.microtime().'.'.$exe;
            $file->move('uploads/users/', $filename);
            $sidebar_Data->Bottom_sidebar_ad = $filename;
        }
        $sidebar_Data->update();

        return redirect()->route('sidebar.all')->with('sucess', 'Advertisement Sucessfully Updated!!');
    }

    public function Sidebar_edit($id){
        $sidebar_Data = SidebarAdvertisement::findOrFail($id);
        return view('Sidebar_advertisement.sidebar_edit', compact('sidebar_Data'));
    }

    public function Sidebar_delete($id){
        SidebarAdvertisement::FindOrFail($id)->delete();
        return redirect()->route('sidebar.all')->with('success', 'Advertisement Has Been Successfully Deleted!!');
    }



}
