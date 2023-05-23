@extends('admin.layout.master')
@section('title')
   Add cv/pdf file
@endsection
@section('body')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2> Add (cv/pdf) file form</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i></a></li>
                            <li class="breadcrumb-item">upload (cv/pdf)</li>
                            <li class="breadcrumb-item active">Add </li>
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
                            <h2>(cv/pdf) file Information </h2>
                        </div>
                        <div class="body">
                            <form action="{{route('cv.store')}}" method="post" id="basic-form" enctype="multipart/form-data"  >
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label>About file(Name)</label>
                                        <input type="text" name="file_name" value="{{old('file_name')}}"  class="form-control" >
                                        <div class="text-danger">@error('file_name'){{$message}}@enderror </div>
                                    </div>
                                    <div class="col-md-6 form-group">
                                            <label>Upload file here</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" name="file"  class="custom-file-input" id="inputGroupFile01">
                                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                <div class="text-danger">@error('file'){{$message}}@enderror </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>Status</div>
                                <label class="fancy-radio"><input name="status" value="1" type="radio"><span><i></i>Published</span></label>
                                <label class="fancy-radio"><input name="status" value="0" type="radio" checked><span><i></i>Unpublished</span></label>
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





