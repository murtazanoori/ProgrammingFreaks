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
                                <a href="{{route('Post.create')}}" class="btn btn-primary mb-4" style="color: white;"><i
                                        class="fas fa-plus-circle"> Add Post</a></i>
                                <div class="table-responsive">
                                    <table class="table table-bordered border text-nowrap mb-0" id="new-edit">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Post title</th>
                                                <th>Post Image</th>
                                                <th>Category</th>
                                                <th>Sub Category</th>
                                                <th>Admin</th>
                                                <th>Author</th>
                                                <th name="bstable-actions">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($posts as $item)
                                                <tr>
                                                    <td class="text-center">{{ $loop->iteration }}</td>

                                                    <td class="text-center">{{ $item->post_title }}</td>
                                                    <td>
                                                    <img class="avatar avatar-md brround cover-image"
                                                            src="{{ asset('uploads/users/'.$item->post_picture) }}"
                                                            alt="" style="width: 200px;"></td>

                                                    <td class="text-center">{{ $item->Pcatcon->sub_category_name }}</td>

                                                    <td class="text-center">{{ $item->Pcatcon->Catcon->category_name }}</td>


                                                    <td class="text-center">
                                                        @if ($item->admin_id != 0)
                                                        {{ Auth::user()->id; }}
                                                        @endif</td>

                                                    <td class="text-center"></td>

                                                    <td name="bstable-actions">
                                                        <div class="btn-list">
                                                            <a  href="{{route('Post.edit',$item->id)}}" class="btn btn-sm btn-primary">
                                                                <span class="bx bxs-edit-alt"> </span>
                                                            </a>
                                                            <a href="{{route('Post.delete',$item->id)}}" class="btn  btn-sm btn-danger">
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
