<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    public function admin_auth(){
        return view('admin.layouts.master');
    }
    // for displaying admin login opage
    public function index(){
        return view('auth.admin_login');
    }

    public function admin_login(Request $request){
        $credintials = [
            'email' => $request->input('email'),
            'password' => $request->input('password')

        ];
        // dd($credintials);
        if (Auth::guard('admin')->attempt($credintials)) {
            return view('admin.layouts.master');

        }else{

            return view('auth.admin_login');
        }
    }

    public function admin_logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.up');
    }

    public function admin_profile (){
        //getting that logged in Admin ID
        $id = Auth::guard('admin')->user()->id;

        //finding which user is logged in ?
        $editData = Admin::find($id);
        return view('admin.layouts.profile', compact('editData'));
    }

    public function Editprofile(){
          //getting that logged in Admin ID
          $id = Auth::guard('admin')->user()->id;

          //finding which user is logged in ?
          $editData = Admin::find($id);
          return view('admin.layouts.edit_profile', compact('editData'));
    }

    public function StoreProfile(Request $request){

        $id = Auth::guard('admin')->user()->id;
        $data = Admin::find($id);
        $data->name = $request->name;
        $data->email = $request->email;

        if($request->hasFile('profile_image')){

            $request->validate([
                'profile_image' => 'required|image|mimes:jpg,jpeg,png,gif'
            ]);

            $del = 'uploads/users/'.$data->profile_image;
           if (File::exists($del)) {

            File::delete($del);

            }
            $file = $request->file('profile_image');
            $exe = $file->getClientOriginalExtension();
            $filename = 'Profile_'.microtime().'.'.$exe;
            $file->move('uploads/users/',$filename );
            $data->profile_image= $filename;
         }

         if($request->hasFile('background_image')){

            $request->validate([
                'background_image' => 'required|image|mimes:jpg,jpeg,png,gif'
            ]);

            $del = 'uploads/users/'.$data->background_image;
           if (File::exists($del)) {

            File::delete($del);

            }
            $file = $request->file('background_image');
            $exe = $file->getClientOriginalExtension();
            $filename = 'Bac_'.microtime().'.'.$exe;
            $file->move('uploads/users/',$filename );
            $data->background_image= $filename;
         }
        $data->save();

        return redirect()->route('admin.profile')->with('sucess', 'Admin Profile Sucessfully Updated!');
    }

    public function ChangePassword(){

        return view('admin.layouts.Change_Password');
    }

    public function UpdatePassword(Request $request){

        $validateData = $request->validate([
            'oldpassword' => 'required',
            'newpassword' => 'required',
            'confirm_password' => 'required|same:newpassword',

        ]);

        $hashedPassword = Auth::guard('admin')->user()->password;
        if (Hash::check($request->oldpassword,$hashedPassword )) {
            $users = Admin::find(Auth::id());
            $users->password = bcrypt($request->newpassword);
            $users->save();

            session()->flash('message','Password Updated Successfully');
            return redirect()->back();
        } else{
            session()->flash('message','Old password Not Matched');
            return redirect()->back()->with('sucess', 'Password Sucessfully Updated!');;
        }

    }
}
