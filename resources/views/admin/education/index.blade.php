@extends('admin.layout.master')
@section('title')
    Education Quali. info list
@endsection
@section('body')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>Educational Qualification  Information</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i></a></li>
                            <li class="breadcrumb-item">Educational Qualification</li>
                            <li class="breadcrumb-item active">List</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="d-flex flex-row-reverse">
                            <div class="page_action">
                                {{--                                <button type="button" class="btn btn-primary"><i class="fa fa-download"></i> Download report</button>--}}
                                <a href="{{route('education.add')}}"> <button type="button" class="btn btn-secondary"><i class="icon-plus"></i> Add Educatinal Qualification info</button></a>
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
                            <h2>Educational Qualification  Info Table<small> </small> </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Institute Name</th>
                                        <th>Joining Year</th>
                                        <th>Completed Year</th>
                                        <th>Study Subject/Dep.</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>SL</th>
                                        <th>Institute Name</th>
                                        <th>Joining Year</th>
                                        <th>Completed Year</th>
                                        <th>Study Subject/Dep.</th>
                                        <th>Action</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @if($educations->count())
                                        @foreach($educations as $education)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$education->institute_name}}</td>
                                                <td>{{$education->joining_year}}</td>
                                                <td>{{$education->completed_year}}</td>
                                                <td>{{$education->subject}}</td>
                                                <td>
                                                    <p class="demo-button">
                                                        <a href="{{route('education.edit',['id'=>$education->id])}}"> <button type="button" class="btn btn-success"><i class="icon-book-open"></i></button></a>
                                                        <a href="{{route('education.delete',['id'=>$education->id])}}"> <button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button></a>
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


