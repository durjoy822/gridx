@extends('admin.layout.master')
@section('title')
    Expricenc info list
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
                                {{--                                <button type="button" class="btn btn-primary"><i class="fa fa-download"></i> Download report</button>--}}
                                <a href="{{route('project.edit',['id'=>$details->id])}}"> <button type="button" class="btn btn-secondary"><i class="icon-plus"></i> Project Edit</button></a>
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
                                       <td>{{$details->id}}</td>
                                   </tr>
                                    <tr>
                                       <th>printed div side</th>

                                       <td>{{$details->side=='right'?'col-8':'col-4'}}</td>
{{--                                       <td>{{$details->side}}</td>--}}
                                   </tr>
                                    <tr>
                                        <th>Cateogry</th>
                                        <td>
                                            @if($details->category==1)
                                                blog
                                            @elseif($details->category==2)
                                                E-commerce
                                            @elseif($details->category==3)
                                                Management App
                                            @elseif($details->category==4)
                                                Other
                                            @endif</td>
                                    </tr>
                                    <tr>
                                        <th>Project Name</th>
                                        <td>{{$details->project_name}}</td>
                                    </tr>
                                    <tr>
                                        <th> Server Link</th>
                                        <td>{{$details->server_link}}</td>
                                    </tr>
                                    <tr>
                                        <th>Github Link</th>
                                        <td>{{$details->github_link}}</td>
                                    </tr>
                                    <tr>
                                        <th>Short Description</th>
                                        <td>{!! $details->short_description !!}</td>
                                    </tr>
                                    <tr>
                                        <th>Icon</th>
                                        <td>{{$details->icon}}</td>
                                    </tr>
                                    <tr>
                                        <th>Image</th>
                                        <td>
                                            <img src="{{asset($details->image)}}" style="width: 100px">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <td>
                                            {{$details->status==1?'Published':'Unpublished'}}
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


