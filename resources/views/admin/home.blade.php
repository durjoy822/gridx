@extends('admin.layout.master')
@section('title')
    Dashboard
@endsection
@section('body')



<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h2>Dashboard</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i></a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="d-flex flex-row-reverse">
                        <div class="p-2 d-flex">

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card text-center bg-info">
                    <div class="body">
                        <div class="p-15 text-light">
                            <h3>0{{$project}}</h3>
                            <span>Total Project</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card text-center bg-secondary">
                    <div class="body">
                        <div class="p-15 text-light">
                            <h3>0{{$blog}}</h3>
                            <span>Total Blog</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card text-center bg-warning">
                    <div class="body">
                        <div class="p-15 text-light">
                            <h3>0{{$subscriber}}</h3>
                            <span>Total Subscriber</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card text-center bg-dark">
                    <div class="body">
                        <div class="p-15 text-light">
                            <h3>318</h3>
                            <span>Profile Viewer Total</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row clearfix">
{{--            <div class="col-lg-3 col-md-5 col-sm-12">--}}
{{--                <div class="card">--}}
{{--                    <div class="body">--}}
{{--                        <h4>1TB <i class="fa fa-server float-right"></i></h4>--}}
{{--                        <p class="mb-0">Storage <small class="text-muted float-right">of 1Tb</small></p>--}}
{{--                        <div id="progress-striped progress-xs" class="progress progress-striped mb-0">--}}
{{--                            <div class="progress-bar progress-bar-warning" data-transitiongoal="43" aria-valuenow="43" style="width: 43%;">43%</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="card modal-open m-b-5">--}}
{{--                    <div class="body">--}}
{{--                        <h6>2GB</h6>--}}
{{--                        <p class="mb-0">Documents <small class="text-muted float-right">of 1Tb</small></p>--}}
{{--                    </div>--}}
{{--                    <div class="progress progress-xs progress-transparent custom-color-blue mb-0">--}}
{{--                        <div class="progress-bar" data-transitiongoal="18"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="card modal-open m-b-5">--}}
{{--                    <div class="body">--}}
{{--                        <h6>10GB</h6>--}}
{{--                        <p class="mb-0">Media <small class="text-muted float-right">of 1Tb</small></p>--}}
{{--                    </div>--}}
{{--                    <div class="progress progress-xs progress-transparent custom-color-purple mb-0">--}}
{{--                        <div class="progress-bar" data-transitiongoal="34"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="card modal-open">--}}
{{--                    <div class="body">--}}
{{--                        <h6>20GB</h6>--}}
{{--                        <p class="mb-0">Images <small class="text-muted float-right">of 1Tb</small></p>--}}
{{--                    </div>--}}
{{--                    <div class="progress progress-xs progress-transparent custom-color-green mb-0">--}}
{{--                        <div class="progress-bar" data-transitiongoal="67"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="col-lg-12 ">
                <div class="card">
                    <div class="header">
                        <h2>File Reports</h2>
                    </div>
                    <div class="body" >
                        <div class="card">
                            <div class="card-body table-responsive">
                                <div id="myPlot" style="width:100%;max-width:700px"></div>
                            </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


@endsection
