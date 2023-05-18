@extends('admin.layouts.master')
@section('tut')
    <div class="main-content">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <div class="page-content">
            <div class="container-fluid">
                <div class="card overflow-hidden">
                    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="panel profile-cover">
                                <div class="profile-cover__action bg-img"></div>
                                <div class="profile-cover__img">
                                    <div class="profile-img-1">
                                        <img class="img-fluid" id="backgroundCover" src="{{ url('uploads/users/'.$editData->background_image) }}" alt="img">
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="avatar-xl profile-user-wid mb-4">
                                        <img src="{{ url('uploads/users/'.$editData->profile_image)}}"
                                            alt="Profile Image" id="showImage" class="rounded-circle avatar-xl">
                                    </div>
                                    <h5 class="font-size-15 text-truncate">{{$editData->name}}</h5>
                                    <p class="text-muted mb-0 text-truncate">{{$editData->email}}</p>

                                    <div class="mt-2">
                                        <input type="file" name="profile_image" id="image" style="margin-left:-10px;">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <input type="file" name="background_image" id="background" style="float:right; margin-right:-160px; margin-top:-200px;">
                            </div>
                        </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Edit Personal Information</h4>
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">First name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="name" id="horizontal-firstname-input"
                                    value="{{ $editData->name }}">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" name="email" id="horizontal-email-input"
                                    value="{{ $editData->email }}">
                            </div>
                        </div>

                        <div class="form-group row justify-content-end">
                            <div class="col-sm-9">
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Submit</button>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    {{-- Code for Profile Upload Button --}}
    <style>
        [type="file"] {
            /* Style the color of the message that says 'No file chosen' */
            color: white;
        }

        [type="file"]::-webkit-file-upload-button {
            background: #ED1C1B;
            border: 2px solid #ED1C1B;
            border-radius: 4px;
            color: #fff;
            cursor: pointer;
            font-size: 12px;
            outline: none;
            padding: 10px 25px;
            text-transform: uppercase;
            transition: all 1s ease;
        }

        [type="file"]::-webkit-file-upload-button:hover {
            background: #fff;
            border: 2px solid #535353;
            color: #000;
        }
    </style>


<script type="text/javascript">
    $(document).ready(function() {
        $('#image').change(function(e) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#showImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#background').change(function(e) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#backgroundCover').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>
@endsection
