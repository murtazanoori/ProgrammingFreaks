@extends('admin.layouts.master')
@section('tut')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<body>

    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Create Category</h4>
                                <form action="{{route('Post.update',$post_single->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <label for="formFile" class="form-label mt-0">Post Title</label>
                                    <div class="form-group row mb-4">
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" name="post_title"
                                                id="horizontal-email-input" value="{{$post_single->post_title}}">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title">Description</h4>
                                                    <textarea id="elm1" name="post_details" class="summernote">{{$post_single->post_details}}</textarea>
                                                </div>
                                            </div>
                                        </div> <!-- end col -->
                                    </div>

                                    <label for="formFile" class="form-label mt-0">Select Image</label>
                                    <div class="form-group">
                                        <input type="file" name="post_picture" id="post_pic">
                                    </div>

                                    <label for="formFile" class="form-label mt-0">Image Preview</label>
                                    <div class="d-flex align items-center">
                                        <img src="{{asset('uploads/users/'.$post_single->post_picture)}}" name="existing_img" id="ImgExisting" class="avatar avatar-lg cover-image"
                                            style="width:400px;" >
                                    </div>
                                    <br>

                                    <div class="form-group">
                                        <label class="form-label">Select Category</label>
                                        <select name="sub_category_id" class="form-control form-select">
                                            @foreach ($sub_categories as $item )
                                            <option value="{{$item->id}}"
                                                @if ($item->id == $post_single->sub_category_id)
                                                selected
                                                @endif>{{$item->sub_category_name}} - ({{$item->Catcon->category_name}})
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">Shareable</label>
                                        <select name="is_share" class="form-control form-select"
                                            data-bs-placeholder="Select Country">
                                            <option value="1"
                                            @if ($post_single->is_share == '1')
                                        selected
                                            @endif
                                            >Yes</option>
                                            <option value="0"
                                            @if ($post_single->is_share == '0')
                                        selected
                                            @endif
                                            >No</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">Commentable</label>
                                        <select name="is_comment" class="form-control form-select"
                                            data-bs-placeholder="Select Country">
                                            <option value="1"
                                            @if ($post_single->is_comment == '1')
                                            selected
                                            @endif
                                            >Yes</option>
                                            <option value="0"
                                            @if ($post_single->is_comment == '0')
                                            selected
                                            @endif
                                            >No</option>
                                        </select>
                                    </div>

                                    <label for="">Existing Tags</label>
                                    <div class="text-wrap">
                                        <div class="example">
                                            @foreach ($existing_tags as $item)
                                            <div class="tags">
                                                <span class="tag tag-rounded tag-icon tag-red"><i class="fe fe-map-pin"></i>{{$item->tag_name}}<a href="javascript:void(0)" class="tag-addon tag-addon-cross tag-red"><i class="fe fe-x text-white m-1"></i></a></span>
                                                <a href="{{route('tag.delete',[$item->id,$post_single->id])}}">Delete</a>
                                            </div>
                                            @endforeach

                                        </div>
                                    </div>

                                    <label for="formFile" class="form-label mt-0">Tags</label>
                                    <div class="form-group row mb-4">
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" name="tags"
                                                id="horizontal-email-input">
                                        </div>
                                    </div>

                                    <div>
                                        <button type="submit" class="btn btn-primary w-md">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- and on the second function we write down our img id --}}

<script type="text/javascript">
    $(document).ready(function() {
        $('#post_pic').change(function(e) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#ImgExisting').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>
</body>


@endsection
