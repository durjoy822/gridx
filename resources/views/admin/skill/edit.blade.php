@extends('admin.layout.master')
@section('title')
    Edit  Skill  info
@endsection
@section('body')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>Skill info Edit form</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i></a></li>
                            <li class="breadcrumb-item">Skill</li>
                            <li class="breadcrumb-item active">Edit</li>
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
                            <h2>Edit Skill basic information</h2>
                        </div>
                        <div class="body">
                            <form action="{{route('skill.update',['id'=>$skill->id])}}" method="post" id="basic-form"  >@csrf
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label>Skill Category Name</label>
                                        <input type="text" value="{{$skill->name}}" name="name" value="{{old('name')}}"  class="form-control" >
                                        <div class="text-danger">@error('name'){{$message}}@enderror </div>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Skill Percentage</label>
                                        <input type="number" value="{{$skill->skill_percentage}}" name="skill_percentage" value="{{old('skill_percentage')}}"  class="form-control" >
                                        <div class="text-danger">@error('skill_percentage'){{$message}}@enderror </div>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Chart color</label>
                                        <input type="text" value="{{$skill->chart_color}}" name="chart_color" value="{{old('chart_color')}}"  class="form-control" >
                                        <div class="text-danger">@error('chart_color'){{$message}}@enderror </div>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Icon</label>
                                        <input type="text" value="{{$skill->icon}}" name="icon" value="{{old('icon')}}"  class="form-control" >
                                        <div class="text-danger">@error('icon'){{$message}}@enderror </div>
                                    </div>
                                </div>
                                <div>Status</div>
                                <label class="fancy-radio"><input name="status" {{$skill->status==1?'checked':''}} value="1" type="radio"><span><i></i>Published</span></label>
                                <label class="fancy-radio"><input name="status" {{$skill->status==0?'checked':''}} value="0" type="radio"><span><i></i>Unpublished</span></label>
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





