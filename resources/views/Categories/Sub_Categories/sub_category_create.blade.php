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
                                <h4 class="card-title mb-4">Create Category</h4>
                                <form action={{ route('sub_category.store') }} method="POST">
                                    @csrf

                                    <label for="formFile" class="form-label mt-0">Sub Category Name</label>
                                    <div class="form-group row mb-4">
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="sub_category_name"
                                                id="horizontal-email-input" style="width: 396px;">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">Show on Menu</label>
                                        <select name="sub_category_status" class="form-control form-select"
                                            data-bs-placeholder="Select Country">
                                            <option value="Show">Show</option>
                                            <option value="Hide">Hide</option>
                                        </select>
                                    </div>

                                    <label for="formFile" class="form-label mt-0">Sub Category Order</label>
                                    <div class="form-group row mb-4">
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="sub_category_order"
                                                id="horizontal-email-input" style="width: 396px;">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">Select Category</label>
                                        <select name="category_id" class="form-control form-select"
                                        @foreach ($categories as $item )
                                            data-bs-placeholder="Select Country">
                                            <option value="{{$item->id}}">{{$item->category_name}}</option>
                                            @endforeach
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
@endsection
