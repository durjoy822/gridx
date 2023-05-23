@extends('admin.layout.master')
@section('title')
    Project info list
@endsection
@section('body')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>Project Information</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i></a></li>
                            <li class="breadcrumb-item">Project </li>
                            <li class="breadcrumb-item active">List</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="d-flex flex-row-reverse">
                            <div class="page_action">
                                {{--                                <button type="button" class="btn btn-primary"><i class="fa fa-download"></i> Download report</button>--}}
                                <a href="{{route('project.add')}}"> <button type="button" class="btn btn-secondary"><i class="icon-plus"></i> Add Project info</button></a>
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
                            <h2>Project  Info Table<small> </small> </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>image</th>
                                        <th>category</th>
                                        <th>Side (left/right)</th>
                                        <th>project_name</th>
                                        <th>server_link</th>
                                        <th>github_link</th>
                                        <th>status</th>
                                        <th>Action</th>

                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>SL</th>
                                        <th>image</th>
                                        <th>category</th>
                                        <th>Side (left/right)</th>
                                        <th>project_name</th>
                                        <th>server_link</th>
                                        <th>github_link</th>
                                        <th>status</th>
                                        <th>Action</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @if($projects->count())
                                        @foreach($projects as $project)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>
                                                    <img src="{{asset($project->image)}}" style="width: 100px">
                                                </td>
                                                <td>
                                                    @if($project->category==1)
                                                        blog
                                                    @elseif($project->category==2)
                                                     E-commerce
                                                        @elseif($project->category==3)
                                                    Management App
                                                        @elseif($project->category==4)
                                                    Other
                                                        @endif
                                                </td>
                                                <td>{{$project->side}}</td>
                                                <td>{{$project->project_name}}</td>
                                                <td>{{$project->server_link}}</td>
                                                <td>{{$project->github_link}}</td>
                                                <td>
                                                    {{$project->status==1?'published':'Unpublished'}}
                                                </td>

                                                <td>
                                                    <p class="demo-button">
                                                        <a href="{{route('project.edit',['id'=>$project->id])}}"> <button type="button" class="btn btn-success"><i class="icon-book-open"></i></button></a>
                                                        <a href="{{route('project.details',['id'=>$project->id])}}"> <button type="button" class="btn btn-warning"><i class="icon-eye"></i></button></a>
                                                        <a href="{{route('project.delete',['id'=>$project->id])}}> <button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button></a>
                                                    </p>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="9" class="text-center text-danger">No data !<br> Table Empty</td>
                                        </tr>
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
@endsection

