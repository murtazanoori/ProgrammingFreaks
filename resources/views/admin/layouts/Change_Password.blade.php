@extends('admin.layouts.master')
@section('tut')
    <div class="main-content">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <div class="page-content">
            <div class="container-fluid">
                <div class="card overflow-hidden">
                    <div class="row">
                        @php
                            $id = Auth::user()->id;

                            //finding which user is logged in ?
                            $editData = App\Models\User::find($id);

                        @endphp
                        <div class="panel profile-cover">
                            <div class="profile-cover__action bg-img"></div>
                            <div class="profile-cover__img">
                                <div class="profile-img-1">
                                    <img class="img-fluid" id="backgroundCover"
                                        src="{{ !empty($editData->background_image) ? url('uploads/users/' . $editData->background_image) : url('upload/users/22.jpg') }}"
                                        alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="avatar-xl profile-user-wid mb-4">
                                    <img src="{{ !empty($editData->profile_image) ? url('uploads/users/' . $editData->profile_image) : url('upload/users/22.jpg') }}"
                                        alt="Profile Image" id="showImage" class="rounded-circle avatar-xl">
                                </div>
                                <h5 class="font-size-15 text-truncate">{{ $editData->name }}</h5>
                                <p class="text-muted mb-0 text-truncate">{{ $editData->email }}</p>
                            </div>

                            <div class="col-sm-8">
                                <div class="pt-4">

                                    <div class="mt-4">
                                        <a href="{{ route('profile.edit') }}"
                                            class="btn btn-primary waves-effect waves-light btn-sm"
                                            style="float: right; margin-top:-25px;">View
                                            Profile <i class="mdi mdi-arrow-right ml-1"></i></a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">

                        @if (count($errors))
                            @foreach ($errors->all() as $error)
                                <p class="alert alert-danger alert-dismissible fade show"> {{ $error }} </p>
                            @endforeach
                        @endif

                        <form action="{{ route('update.password') }}" method="POST">
                            @csrf

                            <h4 class="card-title mb-4">Change Password</h4>
                            <div class="form-group row mb-4">
                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Old Password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" name="oldpassword" id="horizontal-firstname-input">
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label for="horizontal-email-input" class="col-sm-3 col-form-label">New Password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" name="newpassword" id="horizontal-email-input">
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label for="horizontal-email-input" class="col-sm-3 col-form-label">Confirm Password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" name="confirm_password" id="horizontal-email-input">
                                </div>
                            </div>

                            <div class="form-group row justify-content-end">
                                <div class="col-sm-9">
                                    <div>
                                        <button type="submit" class="btn btn-primary w-md">Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
