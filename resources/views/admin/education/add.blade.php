@extends('admin.layout.master')
@section('title')
    Education Quali. info add
@endsection
@section('body')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>Educational Qualification Add Form </h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i></a></li>
                            <li class="breadcrumb-item">Educational Qualification</li>
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
                            <h2>Educational Qualification  basic information</h2>
                        </div>
                        <div class="body">
                            <form action="{{route('education.store')}}" method="post" id="basic-form" method="post"  >@csrf
                                <div class="form-group">
                                    <label>Institute Name </label>
                                    <input type="text" name="institute_name" value="{{old('institute_name')}}"class="form-control" >
                                    <div class="text-danger">@error('institute_name'){{$message}}@enderror </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label>Joining Year</label>
                                        <input type="number" name="joining_year" value="{{old('joining_year')}}" class="form-control" >
                                        <div class="text-danger">@error('joining_year'){{$message}}@enderror </div>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Completed Year</label>
                                        <input type="number" name="completed_year" value="{{old('completed_year')}}"  class="form-control" >
                                        <div class="text-danger">@error('completed_year'){{$message}}@enderror </div>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Subject </label>
                                    <input type="text" name="subject" value="{{old('subject')}}"  class="form-control" >
                                    <div class="text-danger">@error('subject'){{$message}}@enderror </div>
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


