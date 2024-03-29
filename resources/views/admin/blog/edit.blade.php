@extends('admin.layout.master')
@section('title')
    Edit  Blog info
@endsection
@section('body')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>Blog info Edit form</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i></a></li>
                            <li class="breadcrumb-item">Blog</li>
                            <li class="breadcrumb-item active">list</li>
                            <li class="breadcrumb-item active">edit</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="d-flex flex-row-reverse">
                            <div class="page_action">
                                <button type="button" class="btn btn-primary"><i class="fa fa-download"></i> Download report</button>
                                <button type="button" class="btn btn-secondary"><i class="fa fa-send"></i> Send report</button>
                            </div>
                            <div class="p-2 d-flex">

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>Edit Blog  basic information</h2>
                        </div>
                        <div class="body">
                            <form action="{{route("blog.update",$blog->id)}}" method="post" id="basic-form" enctype="multipart/form-data" >@csrf
                                <div class="form-group">
                                    <label>Select post side </label>
                                    <select name="side" class="form-control">
                                        <option  selected>Select post side</option>
                                        <option value="left" {{$blog->side=='left'?'selected':''}}>Left (col-4)</option>
                                        <option value="right" {{$blog->side=='right'?'selected':''}} >right (col-8)</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Blog Title</label>
                                    <input type="text"  value="{{$blog->blog_title}}" value="{{old('blog_title')}}" name="blog_title" class="form-control" >
                                    <div class="text-danger">@error('blog_title'){{$message}}@enderror </div>
                                </div>
                                <div class="form-group">
                                    <label>Blog Details </label>
                                    <textarea class="form-control tinymce" cols="5" rows="10" value="{{old('details')}}" name="details" >{!! $blog->details !!}</textarea>
                                    <div class="text-danger">@error('details'){{$message}}@enderror </div>
                                </div>
                                <div>
                                    <label>Project Image</label>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" name="image"  value="{{old('image')}}" class="custom-file-input" id="inputGroupFile01">
                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                    </div>
                                </div>
                                <div> <img src="{{asset($blog->image)}}" style="width: 100px"></div>
                                <div>Status</div>
                                <label class="fancy-radio"><input name="status" value="1" {{$blog->status==1?'checked':''}} type="radio"><span><i></i>Published</span></label>
                                <label class="fancy-radio"><input name="status" value="0" {{$blog->status==0?'checked':''}}  type="radio"><span><i></i>Unpublished</span></label>
                                <br>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection




