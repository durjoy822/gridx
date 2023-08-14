@extends('admin.layout.master')
@section('title')
    project info list
@endsection
@section('body')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>Project  Details Information </h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i></a></li>
                            <li class="breadcrumb-item">Project  </li>
                            <li class="breadcrumb-item active">List</li>
                            <li class="breadcrumb-item active">view</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="d-flex flex-row-reverse">
                            <div class="page_action">
                                <a href="{{route('work.edit',['id'=>$work->id])}}"> <button type="button" class="btn btn-secondary"><i class="icon-book-open"></i> Project Edit</button></a>
                            </div>
                            <div class="p-2 d-flex">

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>Project Info Details Table<small> </small> </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <tr>
                                        <th>SL</th>
                                        <td>{{$work->id}}</td>
                                    </tr>
                                    <tr>
                                        <th>printed div side</th>
                                        <td>{{$work->side=='right'?'col-8':'col-4'}}</td>
                                    </tr>
                                    <tr>
                                        <th>Cateogry</th>
                                        <td>
                                            @if($work->category==1)
                                                blog
                                            @elseif($work->category==2)
                                                E-commerce
                                            @elseif($work->category==3)
                                                Management App
                                            @elseif($work->category==4)
                                                Other
                                            @endif</td>
                                    </tr>
                                    <tr>
                                        <th>Project Name</th>
                                        <td>{{$work->project_name}}</td>
                                    </tr>
                                    <tr>
                                        <th> Server Link</th>
                                        <td>{{$work->server_link}}</td>
                                    </tr>
                                    <tr>
                                        <th>Github Link</th>
                                        <td>{{$work->github_link}}</td>
                                    </tr>
                                    <tr>
                                        <th>Short Description</th>
                                        <td>{!! $work->short_description !!}</td>
                                    </tr>
                                    <tr>
                                        <th>Image</th>
                                        <td>
                                            <img src="{{asset($work->image)}}" style="width: 100px">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <td>
                                            {{$work->status==1?'Published':'Unpublished'}}
                                        </td>
                                    </tr>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
@endsection



