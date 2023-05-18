<?php

namespace App\Http\Controllers\LandingPage;

use Illuminate\Http\Request;
use App\Models\Advertisement;
use App\Http\Controllers\Controller;
use App\Models\SidebarAdvertisement;

class LandingController extends Controller
{
    //
    public function landing_ad(){
        $home_ad = Advertisement::where('id', 1)->first();
        return view('Landing.layouts.landing_master',compact('home_ad'));
    }
    public function blog1(){
        $sidebar_Data = SidebarAdvertisement::first();
        return view('Landing.Pages.Blog_post1', compact('sidebar_Data'));
    }

}
