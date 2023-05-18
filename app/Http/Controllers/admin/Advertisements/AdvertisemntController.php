<?php

namespace App\Http\Controllers\admin\Advertisements;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Advertisement;
use Illuminate\Support\Facades\File;

class AdvertisemntController extends Controller
{
    //
    public function home_ad()
    {
        $home_ad = Advertisement::where('id', 1)->first();
        return view('Advertisements.MainAdvertisement', compact('home_ad'));
    }

    public function home_ad_update(Request $request)
    {

        $home_ad = Advertisement::where('id', 1)->first();


        $home_ad->Top_ad_url = $request->input('Top_ad_url');
        $home_ad->Top_ad_status = $request->input('Top_ad_status');

        $home_ad->Bottom_ad_url = $request->input('Bottom_ad_url');
        $home_ad->Bottom_ad_status = $request->input('Bottom_ad_status');
       
        $home_ad->Footer_ad_url = $request->input('Footer_ad_url');
        $home_ad->Footer_ad_status = $request->input('Footer_ad_status');

        if ($request->hasFile('Top_ad')) {

            $del = 'uploads/users/' . $home_ad->Top_ad;
            if (File::exists($del)) {
                # code...
                File::delete($del);
            }
            $file = $request->file('Top_ad');
            $exe = $file->getClientOriginalExtension();


            // this is very import part it took me some time to figure it out , soo i added Top_.microtime().'.'.$exe; , and in each filed its a diffrent name
            // because if i had left them all empty with no name , then it would upload the same image 2 image without making them diffrent and it would show the same image or gif for
            // Top advertisement and for bottom


            $filename = 'Top_'.microtime().'.'.$exe;
            $file->move('uploads/users/', $filename);
            $home_ad->Top_ad = $filename;
        }

        if ($request->hasFile('Bottom_ad')) {

            $del = 'uploads/users/' . $home_ad->Bottom_ad;
            if (File::exists($del)) {
                File::delete($del);
            }
            $file = $request->file('Bottom_ad');
            $exe = $file->getClientOriginalExtension();
            $filename = 'Bottom_'.microtime().'.'.$exe;
            $file->move('uploads/users/', $filename);
            $home_ad->Bottom_ad = $filename;
        }


        if ($request->hasFile('Footer_ad')) {

            $del = 'uploads/users/' . $home_ad->Footer_ad;
            if (File::exists($del)) {
                File::delete($del);
            }
            $file = $request->file('Footer_ad');
            $exe = $file->getClientOriginalExtension();
            $filename = 'Footer_'.microtime().'.'.$exe;
            $file->move('uploads/users/', $filename);
            $home_ad->Footer_ad = $filename;
        }
        $home_ad->update();
        return redirect()->back()->with('sucess', 'Advertisement Sucessfully Updated!');
    }
}
