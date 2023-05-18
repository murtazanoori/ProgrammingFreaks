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
                                <form action={{ route('category.store') }} method="POST">
                                    @csrf

                                    <label for="formFile" class="form-label mt-0">Category Name</label>
                                    <div class="form-group row mb-4">
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="category_name"
                                                id="horizontal-email-input" style="width: 396px;">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">Show on Menu</label>
                                        <select name="show_menu" class="form-control form-select"
                                            data-bs-placeholder="Select Country">
                                            <option value="Show">Show</option>
                                            <option value="Hide">Hide</option>
                                        </select>
                                    </div>

                                    <label for="formFile" class="form-label mt-0">Category Order</label>
                                    <div class="form-group row mb-4">
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="category_order"
                                                id="horizontal-email-input" style="width: 396px;">
                                        </div>
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
