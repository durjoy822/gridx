@extends('admin.layout.master')
@section('title')
    Edit  Slider info
@endsection
@section('body')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>Slider info Edit form</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i></a></li>
                            <li class="breadcrumb-item">Slider</li>
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
                            <h2>Slider  basic information</h2>
                        </div>
                        <div class="body">
                            <form action="{{route('slider.update',['id'=>$slider->id])}}" method="post" id="basic-form"  >@csrf
                                <div class="form-group">
                                    <label>Slider Details</label>
                                    <input type="text" value="{{$slider->slider_details}}" value="{{old('slider_details')}}" name="slider_details" class="form-control" >
                                    <div class="text-danger">@error('slider_details'){{$message}}@enderror </div>
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




