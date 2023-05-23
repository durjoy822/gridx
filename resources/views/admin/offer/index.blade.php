@extends('admin.layout.master')
@section('title')
   Service-Offer info list
@endsection
@section('body')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>Service offering Information</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i></a></li>
                            <li class="breadcrumb-item">Offer </li>
                            <li class="breadcrumb-item active">List</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="d-flex flex-row-reverse">
                            <div class="page_action">
                                {{--                                <button type="button" class="btn btn-primary"><i class="fa fa-download"></i> Download report</button>--}}
                                <a href="{{route('offer.add')}}"> <button type="button" class="btn btn-secondary"><i class="icon-plus"></i> Add Service offer info</button></a>
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
                            <h2>Offer  Info Table<small> </small> </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Offer/service Category</th>
                                        <th>Service Details</th>
                                        <th>Icon</th>
                                        <th>Status</th>
                                        <th>Action</th>

                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>SL</th>
                                        <th>Offer/service Category</th>
                                        <th>Service Details</th>
                                        <th>Icon</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @if($offers->count())
                                        @foreach($offers as $offer)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>
                                                    @if($offer->category==1)
                                                       Development
                                                    @elseif($offer->category==2)
                                                        Web Designing
                                                    @elseif($offer->category==3)
                                                        Client Satisfaction
                                                    @elseif($offer->category==4)
                                                        Punctuality
                                                    @elseif($offer->category==5)
                                                        Graphics Design
                                                    @endif
                                                </td>
                                                <td>{!! substr($offer->service_details,0,50) !!}</td>
                                                <td>{{$offer->icon}}</td>
                                                <td>
                                                    {{$offer->status==1?'published':'Unpublished'}}
                                                </td>

                                                <td>
                                                    <p class="demo-button">
                                                        <a href="{{route('offer.edit',['id'=>$offer->id])}}"> <button type="button" class="btn btn-success"><i class="icon-book-open"></i></button></a>
                                                        <a href="{{route('offer.delete',['id'=>$offer->id])}}> <button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button></a>
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


