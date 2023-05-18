@extends('admin.layouts.master')
@section('tut')
    <div class="main-content">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Top Advertisement</h4>
                                <form action="{{route('sidebar.update',$sidebar_Data->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="id" value="{{$sidebar_Data->id}}">

                                    <label for="formFile" class="form-label mt-0">Existing Image</label>
                                    <div class="d-flex align items-center">
                                        <img src="{{ asset('uploads/users/'.$sidebar_Data->Top_sidebar_ad) }}"
                                            class="avatar avatar-lg cover-image" name="Top_sidebar_ad" id="TopImg" style="width:400px;">
                                    </div>
                                    <br>

                                    <label for="formFile" class="form-label mt-0">Select Image</label>
                                    <div class="form-group">
                                        <input type="file" name="Top_sidebar_ad" id="Top_sidebar_input">
                                    </div>

                                    <label for="formFile" class="form-label mt-0">URL</label>
                                    <div class="form-group row mb-4">
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="Top_sidebar_url" id="horizontal-email-input"
                                                style="width: 396px;" value="{{$sidebar_Data->Top_sidebar_url}}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">Status</label>
                                        <select name="Top_sidebar_status" class="form-control form-select"
                                            data-bs-placeholder="Select Country">
                                            <option value="Show"@if ($sidebar_Data->Top_sidebar_status == 'Show')
                                                selected
                                            @endif
                                            >Show</option>
                                            <option value="Hide"
                                            @if ($sidebar_Data->Top_sidebar_status == 'Hide')
                                                selected
                                            @endif
                                            >Hide</option>
                                        </select>
                                    </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Bottom Advertisement</h4>


                                <label for="formFile" class="form-label mt-0">Existing Image</label>
                                <div class="d-flex align items-center">
                                    <img src="{{ asset('uploads/users/'.$sidebar_Data->Bottom_sidebar_ad)}}" name="Bottom_sidebar_ad" id="BottomImg" class="avatar avatar-lg cover-image"
                                        style="width:400px;">
                                </div>
                                <br>

                                <label for="formFile" class="form-label mt-0">Select Image</label>
                                <div class="form-group">
                                    <input type="file" name="Bottom_sidebar_ad" id="Bottom_sidebar_input">
                                </div>

                                <label for="formFile" class="form-label mt-0">URL</label>
                                <div class="form-group row mb-4">
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="Bottom_sidebar_url" id="horizontal-email-input"
                                            style="width: 396px;" value="{{$sidebar_Data->Bottom_sidebar_url}}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Status</label>
                                    <select name="Bottom_sidebar_status" class="form-control form-select"
                                        data-bs-placeholder="Select Country">
                                        <option value="Show"@if ($sidebar_Data->Bottom_sidebar_status == 'Show')
                                            selected
                                        @endif
                                        >Show</option>
                                        <option value="Hide"@if ($sidebar_Data->Bottom_sidebar_status == "hide")
                                            selected
                                        @endif
                                        >Hide</option>
                                    </select>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Submit</button>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    {{-- Firstly we specify our input field id
For Top Advertisement --}}

{{-- and on the second function we write down our img id --}}

<script type="text/javascript">
    $(document).ready(function() {
        $('#Top_sidebar_input').change(function(e) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#TopImg').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>

{{-- For Bottom Advertisement --}}

<script type="text/javascript">
    $(document).ready(function() {
        $('#Bottom_sidebar_input').change(function(e) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#BottomImg').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>
@endsection
