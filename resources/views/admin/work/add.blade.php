@extends('admin.layout.master')
@section('title')
    Add  Project info
@endsection
@section('body')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>Project info add form</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i></a></li>
                            <li class="breadcrumb-item">Project</li>
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
                            <h2>Project basic information</h2>
                        </div>
                        <div class="body">
                            <form action="{{route('work.store')}}" method="post" id="basic-form" enctype="multipart/form-data" >@csrf
                                <div> <label>Category Select </label></div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputGroupSelect01">Select..</label>
                                    </div>
                                    <select class="custom-select" name="category" id="inputGroupSelect01">
                                        <option selected>Choose...</option>
                                        <option value="1">Blog</option>
                                        <option value="2">E-Commerce</option>
                                        <option value="3">Management App</option>
                                        <option value="4">Other</option>
                                    </select>
                                </div>
                                <div> <label>Select project print side </label></div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputGroupSelect01">Select..</label>
                                    </div>
                                    <select class="custom-select" name="side" id="inputGroupSelect01">
                                        <option selected>Choose...</option>
                                        <option value="left">Left(col-4)</option>
                                        <option value="right">Right(col-8)</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Project Name </label>
                                    <input type="text" value="{{old('project_name')}}" name="project_name" class="form-control" >
                                    <div class="text-danger">@error('project_name'){{$message}}@enderror </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label>Project server link</label>
                                        <input type="text" name="server_link" value="{{old('server_link')}}" class="form-control" >
                                        <div class="text-danger">@error('server_link'){{$message}}@enderror </div>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Project git hub link</label>
                                        <input type="text" name="github_link" value="{{old('github_link')}}"  class="form-control" >
                                        <div class="text-danger">@error('github_link'){{$message}}@enderror </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label>Project short description</label>
                                        <textarea class="form-control" value="{{old('short_description')}}" name="short_description" ></textarea>
                                        <div class="text-danger">@error('short_description'){{$message}}@enderror </div>
                                    </div>
                                </div>
                                <div>
                                    <label>Project Image</label>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                        <label>Logo</label>
                                        <input type="file" name="image"  value="{{old('image')}}" class="custom-file-input" id="inputGroupFile01">
                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
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



