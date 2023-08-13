@extends('admin.layout.master')
@section('title')
    Edit Contact  info
@endsection
@section('body')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>Contact info Edit form</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i></a></li>
                            <li class="breadcrumb-item">Contact</li>
                            <li class="breadcrumb-item active">Edit </li>
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
                            <h2>Contact basic information</h2>
                        </div>
                        <div class="body">
                            <form action="{{route('contact.update',['id'=>$contact->id])}}" method="post" id="basic-form" enctype="multipart/form-data" >@csrf
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label>Email_one</label>
                                        <input type="text" name="email_1" value="{{$contact->email_1}}" value="{{old('email_1')}}"  class="form-control" >
                                        <div class="text-danger">@error('email_1'){{$message}}@enderror </div>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Email_two</label>
                                        <input type="email_2" name="email_2" value="{{$contact->email_2}}" value="{{old('email_2')}}" class="form-control" >
                                        <div class="text-danger">@error('email_2'){{$message}}@enderror </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label>Email icon</label>
                                        <input type="text" name="icon_1" value="{{$contact->icon_1}}" value="{{old('icon_1')}}"  class="form-control" >
                                        <div class="text-danger">@error('icon_1'){{$message}}@enderror </div>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Number One</label>
                                        <input type="text" name="Num_1" value="{{$contact->num_1}}" value="{{old('Num_1')}}"  class="form-control" >
                                        <div class="text-danger">@error('Num_1'){{$message}}@enderror </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label>Number Two</label>
                                        <input type="num_2" name="num_2" value="{{$contact->num_2}}" value="{{old('num_2')}}" class="form-control" >
                                        <div class="text-danger">@error('num_2'){{$message}}@enderror </div>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Number Icon</label>
                                        <input type="text" name="icon_2" value="{{$contact->icon_2}}" value="{{old('icon_2')}}"  class="form-control" >
                                        <div class="text-danger">@error('icon_2'){{$message}}@enderror </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label>Location One</label>
                                        <input type="text" name="location_1" value="{{$contact->location_1}}" value="{{old('location_1')}}"  class="form-control" >
                                        <div class="text-danger">@error('location_1'){{$message}}@enderror </div>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Location Icon</label>
                                        <input type="text" name="icon_3" value="{{$contact->icon_3}}" value="{{old('icon_3')}}"  class="form-control" >
                                        <div class="text-danger">@error('icon_3'){{$message}}@enderror </div>
                                    </div>
                                </div>

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




