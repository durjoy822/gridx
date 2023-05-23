@extends('admin.layout.master')
@section('title')
   Contact  info list
@endsection
@section('body')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>Contact Information</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i></a></li>
                            <li class="breadcrumb-item">Contact </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="d-flex flex-row-reverse">
                            <div class="page_action">
                                {{--                                <button type="button" class="btn btn-primary"><i class="fa fa-download"></i> Download report</button>--}}
                                <a href="{{route('contact.add')}}"> <button type="button" class="btn btn-secondary"><i class="icon-plus"></i> Add Contact info</button></a>
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
                            <h2>Contact  Info Table<small> </small> </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Email One</th>
                                        <th>Email Two</th>
                                        <th>Email Icon</th>
                                        <th>Number One</th>
                                        <th>Number Two</th>
                                        <th>Phone Icon</th>
                                        <th>Location One</th>
                                        <th>Location Icon</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>SL</th>
                                        <th>Email One</th>
                                        <th>Email Two</th>
                                        <th>Email Icon</th>
                                        <th>Number One</th>
                                        <th>Number Two</th>
                                        <th>Phone Icon</th>
                                        <th>Location One</th>
                                        <th>Location Icon</th>
                                        <th>Action</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @if($contacts->count())
                                        @foreach($contacts as $contact)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$contact->email_1}}</td>
                                                <td>{{$contact->email_2}}</td>
                                                <td>{{$contact->icon_1}}</td>
                                                <td>{{$contact->num_1}}</td>
                                                <td>{{$contact->num_2}}</td>
                                                <td>{{$contact->icon_2}}</td>
                                                <td>{{$contact->location_1}}</td>
                                                <td>{{$contact->icon_3}}</td>
                                            <td>
                                                    <p class="demo-button">
                                                        <a href="{{route('contact.edit',['id'=>$contact->id])}}"> <button type="button" class="btn btn-success"><i class="icon-book-open"></i></button></a>
                                                        <a href="{{route('contact.delete',['id'=>$contact->id])}}> <button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button></a>
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



