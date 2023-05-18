@extends('admin.layouts.master')
@section('tut')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="col-xl-12">
                    <div class="card overflow-hidden">
                        <div class="row">
                            <div class="panel profile-cover">
                                <div class="profile-cover__action bg-img"></div>
                                <div class="profile-cover__img">
                                    <div class="profile-img-1">
                                        <img class="img-fluid" id="backgroundCover"
                                            src="{{ url('uploads/users/' . $editData->background_image) }}"
                                            alt="img">
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="avatar-xl profile-user-wid mb-4">
                                        <img src="{{ url('uploads/users/'.$editData->profile_image) }}"
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
                    <!-- end card -->

                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Personal Information</h4>
                            <div class="table-responsive">
                                <table class="table table-nowrap mb-0">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Full Name :</th>
                                            <td>{{ $editData->name }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">E-mail :</th>
                                            <td>{{ $editData->email }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
            </div>
        </div>
    </div>
 @endsection
