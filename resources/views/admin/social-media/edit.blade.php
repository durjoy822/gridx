@extends('admin.layout.master')
@section('title')
    Edit Social Media  info
@endsection
@section('body')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>Social Media info Edit form</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i></a></li>
                            <li class="breadcrumb-item">Social Media link</li>
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
                            <h2>Edit Social Media basic information</h2>
                        </div>
                        <div class="body">
                            <form action="{{route('social.update',['id'=>$social->id])}}" method="post" id="basic-form" >@csrf
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label>Social Media Name</label>
                                        <input type="text" value="{{$social->name}}" name="name" value="{{old('name')}}"  class="form-control" >
                                        <div class="text-danger">@error('name'){{$message}}@enderror </div>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Social Media link</label>
                                        <input type="text" value="{{$social->link}}" name="link" value="{{old('link')}}"  class="form-control" >
                                        <div class="text-danger">@error('link'){{$message}}@enderror </div>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Social Media Icon</label>
                                        <input type="text" value="{{$social->icon}}" name="icon" value="{{old('icon')}}"  class="form-control" >
                                        <div class="text-danger">@error('icon'){{$message}}@enderror </div>
                                    </div>
                                </div>
                                <div>Status</div>
                                <label class="fancy-radio"><input name="status" {{$social->status==1?'checked':''}} value="1" type="radio"><span><i></i>Published</span></label>
                                <label class="fancy-radio"><input name="status" {{$social->status==0?'checked':''}} value="0" type="radio" ><span><i></i>Unpublished</span></label>
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




