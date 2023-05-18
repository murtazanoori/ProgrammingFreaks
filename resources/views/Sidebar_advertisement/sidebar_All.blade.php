@extends('admin.layouts.master')
@section('tut')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Sidebar Advertisement Table</h3>
                            </div>
                            <div class="card-body">
                                <a href="{{ route('sidebar.create') }}" class="btn btn-primary mb-4" style="color: white;"><i
                                        class="fas fa-plus-circle"> Add Advertisement</a></i>
                                <div class="table-responsive">
                                    <table class="table table-bordered border text-nowrap mb-0" id="new-edit">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Top Sidebar Advertisement</th>
                                                <th>Top Sidebar URL</th>
                                                <th>Top Sidebar Status</th>
                                                <th>Bottom Sidebar Advertisement</th>
                                                <th>Bottom Sidebar URL</th>
                                                <th>Bottom Sidebar Status</th>
                                                <th name="bstable-actions">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($sidebar_Data as $item)
                                                <tr>
                                                    <td class="text-center">{{ $loop->iteration }}</td>
                                                    <td>
                                                        <img class="avatar avatar-md brround cover-image"
                                                            src="{{ asset('uploads/users/' . $item->Top_sidebar_ad) }}"
                                                            alt="" style="width: 200px;">
                                                    </td>
                                                    <td class="text-center">{{ $item->Top_sidebar_url }}</td>
                                                    <td class="text-center">{{ $item->Top_sidebar_status }}</td>
                                                    <td>
                                                        <img class="avatar avatar-md brround cover-image"
                                                            src="{{ asset('uploads/users/' . $item->Bottom_sidebar_ad) }}"
                                                            alt="" style="width: 200px;">
                                                    </td>
                                                    <td class="text-center">{{ $item->Bottom_sidebar_url }}</td>
                                                    <td class="text-center">{{ $item->Bottom_sidebar_status }}</td>
                                                    <td name="bstable-actions">
                                                        <div class="btn-list">
                                                            <a  href="{{route('sidebar.edit',$item->id)}}" class="btn btn-sm btn-primary">
                                                                <span class="bx bxs-edit-alt"> </span>
                                                            </a>
                                                            <a href="{{route('sidebar.delete',$item->id)}}" class="btn  btn-sm btn-danger">
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
