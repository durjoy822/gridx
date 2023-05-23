@extends('admin.layout.master')
@section('title')
    Add  Service offering info
@endsection
@section('body')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>Service offering info add form</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i></a></li>
                            <li class="breadcrumb-item">Service offering</li>
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
                            <h2>Service offering basic information</h2>
                        </div>
                        <div class="body">
                            <form action="{{route('offer.store')}}" method="post" id="basic-form" enctype="multipart/form-data" >@csrf
                                <div> <label>Category Select </label></div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputGroupSelect01">Select..</label>
                                    </div>
                                    <select class="custom-select" name="category" id="inputGroupSelect01">
                                        <option selected>Choose...</option>
                                        <option value="1">Development</option>
                                        <option value="2">Web Designing</option>
                                        <option value="3">Client Satisfaction</option>
                                        <option value="4">Punctuality</option>
                                        <option value="5">Graphics Design</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <div>
                                        <label>Service/Offering Details</label>
                                        <textarea class="form-control" value="{{old('service_details')}}" name="service_details" ></textarea>
                                        <div class="text-danger">@error('service_details'){{$message}}@enderror </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div>
                                        <label>Servicing  Icon</label>
                                        <input type="text" class="form-control" name="icon" value="{{old('icon')}}">
                                        <div class="text-danger">@error('icon'){{$message}}@enderror </div>
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



