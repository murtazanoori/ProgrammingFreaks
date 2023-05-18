 <header id="page-topbar">
     <div class="navbar-header">
         <div class="d-flex">
             <!-- LOGO -->
             <div class="navbar-brand-box">
                 <a href="index.html" class="logo logo-dark">
                     <span class="logo-sm">
                         <img src="{{asset('assets/images/logo.svg')}}" alt="" height="22">
                     </span>
                     <span class="logo-lg">
                         <img src="{{asset('assets/images/logo-dark.png')}}" alt="" height="17">
                     </span>
                 </a>

                 <a href="index.html" class="logo logo-light">
                     <span class="logo-sm">
                         <img src="{{asset('assets/images/logo-light.svg')}}" alt="" height="22">
                     </span>
                     <span class="logo-lg">
                         <img src="{{asset('assets/images/logo-light.png')}}" alt="" height="19">
                     </span>
                 </a>
             </div>

             <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect"
                 id="vertical-menu-btn">
                 <i class="fa fa-fw fa-bars"></i>
             </button>

             <!-- App Search-->
             <form class="app-search d-none d-lg-block">
                 <div class="position-relative">
                     <input type="text" class="form-control" placeholder="Search...">
                     <span class="bx bx-search-alt"></span>
                 </div>
             </form>
         </div>

         <div class="d-flex">

             <div class="dropdown d-inline-block d-lg-none ml-2">
                 <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                     data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <i class="mdi mdi-magnify"></i>
                 </button>
                 <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                     aria-labelledby="page-header-search-dropdown">

                     <form class="p-3">
                         <div class="form-group m-0">
                             <div class="input-group">
                                 <input type="text" class="form-control" placeholder="Search ..."
                                     aria-label="Recipient's username">
                                 <div class="input-group-append">
                                     <button class="btn btn-primary" type="submit"><i
                                             class="mdi mdi-magnify"></i></button>
                                 </div>
                             </div>
                         </div>
                     </form>
                 </div>
             </div>

             <div class="dropdown d-inline-block">
                 <button type="button" class="btn header-item waves-effect" data-toggle="dropdown" aria-haspopup="true"
                     aria-expanded="false">
                     <img class="" src="{{asset('assets/images/flags/us.jpg')}}" alt="Header Language" height="16">
                 </button>
                 <div class="dropdown-menu dropdown-menu-right">

                     <!-- item-->
                     <a href="javascript:void(0);" class="dropdown-item notify-item">
                         <img src="assets\images\flags\spain.jpg" alt="user-image" class="mr-1" height="12"> <span
                             class="align-middle">Spanish</span>
                     </a>

                     <!-- item-->
                     <a href="javascript:void(0);" class="dropdown-item notify-item">
                         <img src="assets\images\flags\germany.jpg" alt="user-image" class="mr-1" height="12">
                         <span class="align-middle">German</span>
                     </a>

                     <!-- item-->
                     <a href="javascript:void(0);" class="dropdown-item notify-item">
                         <img src="assets\images\flags\italy.jpg" alt="user-image" class="mr-1" height="12"> <span
                             class="align-middle">Italian</span>
                     </a>

                     <!-- item-->
                     <a href="javascript:void(0);" class="dropdown-item notify-item">
                         <img src="assets\images\flags\russia.jpg" alt="user-image" class="mr-1" height="12"> <span
                             class="align-middle">Russian</span>
                     </a>
                 </div>
             </div>
                <a href="{{url('/home')}}" class="btn header-item noti-icon waves-effect" target="_blank" style="padding-top:24px; margin-left:5px;"><i class="bx bxs-home"></i></a>

             <div class="dropdown d-none d-lg-inline-block ml-1">
                 <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                     <i class="bx bx-fullscreen"></i>
                 </button>
             </div>

             @php
             $id = Auth::guard('admin')->user()->id;

             //finding which admin is logged in ?
             $editData = App\Models\Admin::find($id);


         @endphp

             <div class="dropdown d-inline-block">
                 <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                     data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <img class="rounded-circle header-profile-user" src="{{asset('uploads/users/'.$editData->profile_image)}}"
                         alt="Header Avatar">
                     <span class="d-none d-xl-inline-block ml-1">{{$editData->name}}</span>
                     <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                 </button>
                 <div class="dropdown-menu dropdown-menu-right">
                     <!-- item-->
                     <a class="dropdown-item" href="{{route('admin.profile')}}"><i
                             class="bx bxs-user font-size-16 align-middle mr-1"></i> Profile</a>
                     <a class="dropdown-item" href="{{route('show.password')}}"><i
                             class="bx bxs-key font-size-16 align-middle mr-1"></i> Change Password</a>
                     <div class="dropdown-divider"></div>
                     <form method="GET" action="{{ route('admin.logout') }}">
                        @csrf
                     <a class="dropdown-item text-danger" href="{{route('admin.logout')}}"
                      onclick="event.preventDefault(); this.closest('form').submit();"><i
                             class="bx bx-power-off font-size-16 align-middle mr-1 text-danger"></i> Logout</a>
                 </div>
             </div>
            </form>
         </div>
     </div>
 </header>
