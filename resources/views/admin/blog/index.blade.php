@extends('admin.layout.master')
@section('title')
    Blog info list
@endsection
@section('body')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>Blog Information</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i></a></li>
                            <li class="breadcrumb-item">Blog </li>
                            <li class="breadcrumb-item active">List</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="d-flex flex-row-reverse">
                            <div class="page_action">
                                {{--                                <button type="button" class="btn btn-primary"><i class="fa fa-download"></i> Download report</button>--}}
                                <a href="{{route('blog.add')}}"> <button type="button" class="btn btn-secondary"><i class="icon-plus"></i> Add blog info</button></a>
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
                            <h2>Blog  Info Table<small> </small> </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Image</th>
                                        <th>Blog Title</th>
                                        <th>Side (left/right) </th>
                                        <th>Blog Details</th>
                                        <th>Creator</th>
                                        <th>Hit Count</th>
                                        <th>status</th>
                                        <th>Action</th>

                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>SL</th>
                                        <th>Image</th>
                                        <th>Blog Title</th>
                                        <th>Side (left/right) </th>
                                        <th>Blog Details</th>
                                        <th>Creator</th>
                                        <th>Hit Count</th>
                                        <th>status</th>
                                        <th>Action</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @if($blogs->count())
                                        @foreach($blogs as $blog)
                                            <tr>
                                                <td></td>
                                                <td>{{$loop->iteration}}</td>
                                                <td>
                                                    <img src="{{asset($blog->image)}}" style="width: 100px">
                                                </td>
                                                <td>{{$blog->blog_title}}</td>
                                                <td>{{$blog->side}}</td>
                                                <td> {!! substr( $blog->details,0,100)!!}</td>

                                                <td>{{$blog->creator}}</td>
                                                <td>{{$blog->hit_count}}</td>
                                                <td>
                                                    {{$blog->status==1?'published':'Unpublished'}}
                                                </td>

                                                <td>
                                                    <p class="demo-button">
                                                        <a href="{{route('blog.edit',['id'=>$blog->id])}}"> <button type="button" class="btn btn-success"><i class="icon-book-open"></i></button></a>
                                                        <a href="{{route('blog.delete',['id'=>$blog->id])}}"> <button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button></a>

                                                    </p>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="9" class="text-center text-danger">No data !<br> Table Empty</td>
                                        </tr>
                                    @endif
{{--                                    @foreach($blogs as $key=>$blog)--}}
{{--                                        {{$blog->id}}<br>--}}

{{--                                    @endforeach--}}
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

