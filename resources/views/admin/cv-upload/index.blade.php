@extends('admin.layout.master')
@section('title')
    (Cv/pdf) info list
@endsection
@section('body')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>(cv/pdf) file Information</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i></a></li>
                            <li class="breadcrumb-item">Upload (Cv/Pdf)</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="d-flex flex-row-reverse">
                            <div class="page_action">
                                {{--                                <button type="button" class="btn btn-primary"><i class="fa fa-download"></i> Download report</button>--}}
                                <a href="{{route('cv.add')}}"> <button type="button" class="btn btn-secondary"><i class="icon-plus"></i> Add cv/pdf file </button></a>
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
                            <h2>CV/PDF -file  Info Table<small> </small> </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>File Name</th>
                                        <th>File</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>SL</th>
                                        <th>File Name</th>
                                        <th>File</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @if($cvUploads->count())
                                        @foreach($cvUploads as $cvUpload)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$cvUpload->file_name}}</td>
                                                <td>
                                                    {{$cvUpload->file}}
                                                </td>
                                                <td>{{$cvUpload->status==1?'published':'Unpublished'}}</td>
                                                <td>
                                                    <p class="demo-button">
                                                        <a href="http://localhost/gridx/public/{{$cvUpload->file}}" download> <button type="button" class="btn btn-warning"><i class="icon-cloud-download"></i></button></a>
                                                        <a href="{{route('cv.edit',['id'=>$cvUpload->id])}}"> <button type="button" class="btn btn-success"><i class="icon-book-open"></i></button></a>
                                                        <a href="{{route('cv.delete',['id'=>$cvUpload->id])}}> <button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button></a>
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



