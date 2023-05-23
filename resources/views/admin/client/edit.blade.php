@extends('admin.layout.master')
@section('title')
    client Review edit
@endsection
@section('body')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>CLient Review  edit form</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i></a></li>
                            <li class="breadcrumb-item">Client review</li>
                            <li class="breadcrumb-item active">edit client review</li>
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
                            <h2>Client review  basic  information</h2>
                        </div>
                        <div class="body">
                            <form action="{{route('client.update',['id'=>$client->id])}}" method="post" id="basic-form" method="post" enctype="multipart/form-data"  >@csrf
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label>Client Name</label>
                                        <input type="text" name="name" value="{{$client->name}}" value="{{old('name')}}" class="form-control" >
                                        <div class="text-danger">@error('name'){{$message}}@enderror </div>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Client Working Dep.</label>
                                        <input type="text" name="working_dep" value="{{$client->working_dep}}" value="{{old('working_dep')}}"  class="form-control" >
                                        <div class="text-danger">@error('working_dep'){{$message}}@enderror </div>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Client Review </label>
                                    <textarea name="review" class="form-control" value="{{old('review')}}">{!! $client->review !!}</textarea>
                                    <div class="text-danger">@error('review'){{$message}}@enderror </div>
                                </div>
                                <div class="col-md-12 form-group">
                                    <label>Upload Client Image</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" name="image"  class="custom-file-input" id="inputGroupFile01">
                                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                        </div>
                                    </div>
                                    <div> <img src="{{asset($client->image)}}" style="width: 100px"></div>

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

