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
                        <h2>Working Exprience  Information</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i></a></li>
                            <li class="breadcrumb-item">Working Exprience </li>
                            <li class="breadcrumb-item active">List</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="d-flex flex-row-reverse">
                            <div class="page_action">
                                {{--                                <button type="button" class="btn btn-primary"><i class="fa fa-download"></i> Download report</button>--}}
                                <a href="{{route('experience.add')}}"> <button type="button" class="btn btn-secondary"><i class="icon-plus"></i> Add working Experience info</button></a>
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
                            <h2>Working Exprience  Info Table<small> </small> </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>working_place</th>
                                        <th>Joining year</th>
                                        <th>year left</th>
                                        <th>Expricence Dep. name</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>SL</th>
                                        <th>working_place</th>
                                        <th>Joining year</th>
                                        <th>year left</th>
                                        <th>Expricence Dep. name</th>
                                        <th>Action</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @if($experiences->count())
                                        @foreach($experiences as $experience)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$experience->working_place}}</td>
                                                <td>{{$experience->joining_year}}</td>
                                                <td>{{$experience->year_left}}</td>
                                                <td>{{$experience->working_dep}}</td>
                                                <td>
                                                    <p class="demo-button">
                                                        <a href="{{route('experience.edit',['id'=>$experience->id])}}"> <button type="button" class="btn btn-success"><i class="icon-book-open"></i></button></a>
                                                        <a href="{{route('experience.delete',['id'=>$experience->id])}}> <button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button></a>
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

