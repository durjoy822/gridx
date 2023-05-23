@extends('admin.layout.master')
@section('title')
    Skill info list
@endsection
@section('body')

    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>Skill Information</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i></a></li>
                            <li class="breadcrumb-item">SKill </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="d-flex flex-row-reverse">
                            <div class="page_action">
                                {{--                                <button type="button" class="btn btn-primary"><i class="fa fa-download"></i> Download report</button>--}}
                                <a href="{{route('skill.add')}}"> <button type="button" class="btn btn-secondary"><i class="icon-plus"></i> Add Skill info</button></a>
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
                            @foreach($skills as $skill)
                                <p>{{$skill->name}}</p>
                            @endforeach
                            <h2>Skill Info Table<small> </small> </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">

                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Skill Category Name</th>
                                        <th>Skill Percentage</th>
                                        <th>Chart_Color</th>
                                        <th>Icon</th>
                                        <th>Status</th>
                                        <th>Action</th>

                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>SL</th>
                                        <th>Skill Category Name</th>
                                        <th>Skill Percentage</th>
                                        <th>Chart_Color</th>
                                        <th>Icon</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
{{--                                    @if($skills->count())--}}
                                        @foreach($skills as $skill)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$skill->name}}</td>
                                                <td>{{$skill->skill_percentage}}</td>
                                                <td>{{$skill->chart_color}}</td>
                                                <td>{{$skill->icon}}</td>
                                                <td>
                                                    {{$skill->status==1?'published':'Unpublished'}}
                                                </td>

                                                <td>
                                                    <p class="demo-button">
                                                        <a href="{{route('skill.edit',['id'=>$skill->id])}}"> <button type="button" class="btn btn-success"><i class="icon-book-open"></i></button></a>
                                                        <a href="{{route('skill.delete',['id'=>$skill->id])}}"> <button  type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button></a>
                                                    </p>
                                                </td>
                                            </tr>
                                        @endforeach
{{--                                    @else--}}
{{--                                        <tr>--}}
{{--                                            <td colspan="9" class="text-center text-danger">No data !<br> Table Empty</td>--}}
{{--                                        </tr>--}}
{{--                                    @endif--}}
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



