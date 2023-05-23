@extends('admin.layout.master')
@section('title')
    Client  info list
@endsection
@section('body')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>Client Review Information</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i></a></li>
                            <li class="breadcrumb-item">Clint review</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="d-flex flex-row-reverse">
                            <div class="page_action">
                                {{--                                <button type="button" class="btn btn-primary"><i class="fa fa-download"></i> Download report</button>--}}
                                <a href="{{route('client.add')}}"> <button type="button" class="btn btn-secondary"><i class="icon-plus"></i> Add client review</button></a>
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
                            <h2> Client Review Table<small> </small> </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Client Image</th>
                                        <th>Client Name</th>
                                        <th>Working Depeartment </th>
                                        <th>Client Review </th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>SL</th>
                                        <th>Client Image</th>
                                        <th>Client Name</th>
                                        <th>Working Depeartment </th>
                                        <th>Client Review </th>
                                        <th>Action</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @if($clients->count())
                                        @foreach($clients as $client)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td><img src="{{asset($client->image)}}" style="width: 100px"></td>
                                                <td>{{$client->name}}</td>
                                                <td>{{$client->working_dep}}</td>
                                                <td>{!! substr($client->review,0,30) !!}</td>
                                                <td>
                                                    <p class="demo-button">
                                                        <a href="{{route('client.edit',['id'=>$client->id])}}"> <button type="button" class="btn btn-success"><i class="icon-book-open"></i></button></a>
                                                        <a href="{{route('client.delete',['id'=>$client->id])}}> <button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button></a>
                                                    </p>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="10" class="text-center text-danger">No data !<br> Table Empty</td>
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




