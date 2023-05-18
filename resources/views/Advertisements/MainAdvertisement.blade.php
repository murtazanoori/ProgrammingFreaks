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
                                <form action="{{route('ad.update')}}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" name="id" value="{{$home_ad->id}}">

                                    <label for="formFile" class="form-label mt-0">Existing Image</label>
                                    <div class="d-flex align items-center">
                                        <img src="{{ asset('uploads/users/'.$home_ad->Top_ad) }}"
                                            class="avatar avatar-lg cover-image" name="existing_Top_img" id="TopExisting" style="width:400px;">
                                    </div>
                                    <br>

                                    <label for="formFile" class="form-label mt-0">Select Image</label>
                                    <div class="form-group">
                                        <input type="file" name="Top_ad" id="Top_ad_input">
                                    </div>

                                    <label for="formFile" class="form-label mt-0">URL</label>
                                    <div class="form-group row mb-4">
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="Top_ad_url" id="horizontal-email-input"
                                                style="width: 396px;" value="{{$home_ad->Top_ad_url}}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">Status</label>
                                        <select name="Top_ad_status" class="form-control form-select"
                                            data-bs-placeholder="Select Country">
                                            <option value="Show"@if ($home_ad->Top_ad_status == 'Show')
                                                selected
                                            @endif
                                            >Show</option>
                                            <option value="Hide"
                                            @if ($home_ad->Top_ad_status == 'Hide')
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
                                    <img src="{{ asset('uploads/users/'.$home_ad->Bottom_ad)}}" name="existing_bottom_img" id="BottomExisting" class="avatar avatar-lg cover-image"
                                        style="width:400px;">
                                </div>
                                <br>

                                <label for="formFile" class="form-label mt-0">Select Image</label>
                                <div class="form-group">
                                    <input type="file" name="Bottom_ad" id="Bottom_ad_input">
                                </div>

                                <label for="formFile" class="form-label mt-0">URL</label>
                                <div class="form-group row mb-4">
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="Bottom_ad_url" id="horizontal-email-input"
                                            style="width: 396px;" value="{{$home_ad->Bottom_ad_url}}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Status</label>
                                    <select name="Bottom_ad_status" class="form-control form-select"
                                        data-bs-placeholder="Select Country">
                                        <option value="Show"@if ($home_ad->Bottom_ad_status == 'Show')
                                            selected
                                        @endif
                                        >Show</option>
                                        <option value="Hide"@if ($home_ad->Bottom_ad_status == "hide")
                                            selected
                                        @endif
                                        >Hide</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card" style="margin-left:-10px;">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Footer Advertisement</h4>

                            <label for="formFile" class="form-label mt-0">Existing Image</label>
                            <div class="d-flex align items-center">
                                <img src="{{ asset('uploads/users/'.$home_ad->Footer_ad) }}" name="existing_footer_img" id="FooterExisting" class="avatar avatar-lg cover-image"
                                    style="width:400px;">
                            </div>
                            <br>

                            <label for="formFile" class="form-label mt-0">Select Image</label>
                            <div class="form-group">
                                <input type="file" name="Footer_ad" id="Footer_ad_input">
                            </div>

                            <label for="formFile" class="form-label mt-0">URL</label>
                            <div class="form-group row mb-4">
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="Footer_ad_url" id="horizontal-email-input"
                                        style="width: 396px;" value="{{$home_ad->Footer_ad_url}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Status</label>
                                <select name="Footer_ad_status" class="form-control form-select"
                                    data-bs-placeholder="Select Country">
                                    <option value="Show"@if ($home_ad->Footer_ad_status == 'Show')
                                        selected
                                    @endif
                                    >Show</option>
                                    <option value="Hide"@if ($home_ad->Footer_ad_status == 'Hide')
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




    {{-- Firstly we specify our input field id
For Top Advertisement --}}

{{-- and on the second function we write down our img id --}}

<script type="text/javascript">
    $(document).ready(function() {
        $('#Top_ad_input').change(function(e) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#TopExisting').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>

{{-- For Bottom Advertisement --}}

<script type="text/javascript">
    $(document).ready(function() {
        $('#Bottom_ad_input').change(function(e) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#BottomExisting').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>

{{-- Footer Advertisement --}}

<script type="text/javascript">
    $(document).ready(function() {
        $('#Footer_ad_input').change(function(e) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#FooterExisting').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>
@endsection
