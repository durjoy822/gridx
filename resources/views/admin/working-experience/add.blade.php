@extends('admin.layout.master')
@section('title')
    Working_expricenc info add
@endsection
@section('body')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>Working Expricence add form</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i></a></li>
                            <li class="breadcrumb-item">Working Expricence</li>
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
                            <h2>Working Expricence basic information</h2>
                        </div>
                        <div class="body">
                            <form action="{{route('experience.store')}}" method="post" id="basic-form" method="post"  >@csrf
                                <div class="form-group">
                                    <label>Working Place </label>
                                    <input type="text" value="{{old('working_place')}}" name="working_place" class="form-control" >
                                    <div class="text-danger">@error('working_place'){{$message}}@enderror </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label>Joining Year</label>
                                        <input type="number" name="joining_year" value="{{old('joining_year')}}" class="form-control" >
                                        <div class="text-danger">@error('joining_year'){{$message}}@enderror </div>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Year Left</label>
                                        <input type="number" name="year_left" value="{{old('year_left')}}"  class="form-control" >
                                        <div class="text-danger">@error('year_left'){{$message}}@enderror </div>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Working Department </label>
                                    <input type="text" name="working_dep" value="{{old('working_dep')}}"  class="form-control" >
                                    <div class="text-danger">@error('working_dep'){{$message}}@enderror </div>
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

