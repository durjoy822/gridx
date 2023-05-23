@extends('admin.layout.master')
@section('title')
    Logo index
@endsection
@section('body')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>Logo/icon/all reserve Information</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i></a></li>
                            <li class="breadcrumb-item">Logo/icon/all reserve</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="d-flex flex-row-reverse">
                            <div class="page_action">
                                {{--                                <button type="button" class="btn btn-primary"><i class="fa fa-download"></i> Download report</button>--}}
                                <a href="{{route('logo.add')}}"> <button type="button" class="btn btn-secondary"><i class="icon-plus"></i> Add  info</button></a>
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
                            <h2>Logo/icon/footer info<small> </small> </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>logo</th>
                                        <th>all right reserved</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>SL</th>
                                        <th>logo</th>
                                        <th>all right reserved</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @if($logos->count())
                                        @foreach($logos as $logo)
                                            <tr>
                                                <td>{{$logo->id}}</td>
                                                <td>
                                                    <img src="{{asset($logo->image)}}" style="width: 100px">
                                                </td>
                                                <td>{{$logo->name}}</td>
                                                <td>{{$logo->status==1?'Published':'Unpublished'}}</td>
                                                <td>
                                                    <p class="demo-button">
                                                        <a href="{{route('logo.edit',['id'=>$logo->id])}}"> <button type="button" class="btn btn-success"><i class="icon-book-open"></i></button></a>
                                                        <a href="{{route('logo.delete',['id'=>$logo->id])}}> <button type="button" class="btn btn-danger" ><i class="fa fa-trash-o"></i></button></a>
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

