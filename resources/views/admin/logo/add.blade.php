@extends('admin.layout.master')
@section('title')
    logo/icon/footer add
@endsection
@section('body')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>About add form</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-dashboard"></i></a></li>
                            <li class="breadcrumb-item">About info</li>
                            <li class="breadcrumb-item active">Add</li>
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
                            <h2>About basic information</h2>
                        </div>
                        <div class="body">
                            <form action="{{route('logo.store')}}" method="post" id="basic-form" method="post" enctype="multipart/form-data" >@csrf
                                <div class="row">
                                    <div class="col-md-12">
                                <div class="form-group">
                                    <label>footer Reserve Name </label>
                                    <input type="text" value="{{old('name')}}" name="name" class="form-control" >
                                    <div class="text-danger">@error('name'){{$message}}@enderror </div>
                                </div>
                                    </div>
{{--                                    <div class="col-md-6">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label>Icon </label>--}}
{{--                                            <input type="text" value="{{old('icon')}}" name="icon" class="form-control" >--}}
{{--                                            <div class="text-danger">@error('icon'){{$message}}@enderror </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                    <div class="col-md-12 form-group">
                                        <label>Upload file here</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" name="image"  class="custom-file-input" id="inputGroupFile01">
                                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                <div class="text-danger">@error('image'){{$message}}@enderror </div>
                                            </div>
                                        </div>
                                        <div>Status</div>
                                        <label class="fancy-radio"><input name="status" value="1" type="radio"><span><i></i>Published</span></label>
                                        <label class="fancy-radio"><input name="status" value="0" type="radio" checked><span><i></i>Unpublished</span></label><br>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                                <br>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

