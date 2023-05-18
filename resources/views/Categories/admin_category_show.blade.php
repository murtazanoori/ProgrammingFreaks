@extends('admin.layouts.master')
@section('tut')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Category Table</h3>
                            </div>
                            <div class="card-body">
                                <a href="{{ route('category.create') }}" class="btn btn-primary mb-4" style="color: white;"><i
                                        class="fas fa-plus-circle"> Add Category</a></i>
                                <div class="table-responsive">
                                    <table class="table table-bordered border text-nowrap mb-0" id="new-edit">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Category Name</th>
                                                <th>Category Status</th>
                                                <th>Category Order</th>
                                                <th name="bstable-actions">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($category_data as $item)
                                                <tr>
                                                    <td class="text-center">{{ $loop->iteration }}</td>

                                                    <td class="text-center">{{ $item->category_name }}</td>

                                                    <td class="text-center">{{ $item->show_menu }}</td>

                                                    <td class="text-center">{{ $item->category_order }}</td>

                                                    <td name="bstable-actions">
                                                        <div class="btn-list">
                                                            <a  href="{{route('category.edit',$item->id)}}" class="btn btn-sm btn-primary">
                                                                <span class="bx bxs-edit-alt"> </span>
                                                            </a>
                                                            <a href="{{route('category.delete',$item->id)}}" class="btn  btn-sm btn-danger">
                                                                <span class="bx bxs-trash"> </span>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                        </tbody>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endsection
