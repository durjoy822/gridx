@extends('admin.layout.master')
@section('title')
    Admin Profile info
@endsection
@section('body')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>Admin Profile Info</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i></a>
                            </li>
                            <li class="breadcrumb-item">Profile</li>
                            <li class="breadcrumb-item active">Admin Profile</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="d-flex flex-row-reverse">
                            <div class="page_action">
                                <button type="button" class="btn btn-primary"><i class="fa fa-download"></i> Download
                                    report</button>
                                <button type="button" class="btn btn-secondary"><i class="fa fa-send"></i> Send
                                    report</button>
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
                        <div class="body">
                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab"
                                        href="#Settings">Settings</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#details_info">Details
                                        Info</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab"
                                        href="#preferences">Preferences</a></li>
                            </ul>
                        </div>
                        <div class="tab-content">

                            <div class="tab-pane active" id="Settings">

                                <div class="body">
                                    <h6>Profile Photo</h6>
                                    <div class="media">
                                        <div class="media-left m-r-15">

                                            @if($admin_info->admin_photo !=null)
                                                <img src="{{ asset($admin_info->admin_photo) }}" style="width: 300px"
                                                    class="user-photo media-object img-fluid" alt="User">
                                            @else
                                                <img src="{{asset('backend')}}/assets/images/user.png" style="width: 300px"
                                                     class="user-photo media-object img-fluid" alt="User">
                                            @endif
                                        </div>
                                        <form action="{{ route('profile.update') }}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="media-body ">
                                                <p>Upload your photo.
                                                    <br> <em>Image should be at least 140px x 140px</em>
                                                </p>
                                                <input type="file" name="admin_photo">
                                            </div>
                                    </div>
                                </div>

                                <div class="body">
                                    <h6>Basic Information</h6>
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <input type="text" value="{{$admin_info->first_name}}"
                                                    name="first_name" class="form-control" placeholder="First Name">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="last_name" value="{{ $admin_info->last_name }}"
                                                    class="form-control" placeholder="Last Name">

                                            </div>
                                            <div class="form-group">
                                                <div>
                                                    <label class="fancy-radio">
                                                        <input name="gender" {{ $admin_info->gender == 'male' ? 'checked' : '' }}
                                                            value="male" type="radio">
                                                        <span><i></i>Male</span>
                                                    </label>
                                                    <label class="fancy-radio">
                                                        <input name="gender"
                                                            {{ $admin_info->gender == 'female' ? 'checked' : '' }} value="female"
                                                            type="radio">
                                                        <span><i></i>Female</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="icon-calendar"></i></span>
                                                    </div>
                                                    <input type="date" name="birth_date"
                                                        value="{{ $admin_info->birth_date }}" data-provide="datepicker"
                                                        data-date-autoclose="true" class="form-control"
                                                        placeholder="Birthdate">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="link" value="{{ $admin_info->link }}"
                                                    class="form-control" placeholder="http://">
                                            </div>
                                            <div class="form-group">
                                                <textarea name="short_description" placeholder="Short Description" class="form-control">{!! $admin_info->short_description !!} </textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="address_one"
                                                    value="{{ $admin_info->address_one }}" class="form-control"
                                                    placeholder="Address Line 1">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="address_two"
                                                    value="{{ $admin_info->address_two }}" class="form-control"
                                                    placeholder="Address Line 2">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="city" value="{{ $admin_info->city }}"
                                                    class="form-control" placeholder="City">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="state" value="{{ $admin_info->state }}"
                                                    class="form-control" placeholder="State/Province">
                                            </div>
                                            <div class="form-group">
                                                <select class="form-control" name="country">
                                                    <option value="{{ $admin_info->country }}">-- Select Country --
                                                    </option>
                                                    <option {{ $admin_info->country == 'Bangladesh' ? 'selected' : '' }}
                                                        value="Bangladesh">Bangladesh</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <textarea name="long_description"  class="form-control"  placeholder="Long Description">{!! $admin_info->long_description !!} </textarea>
                                            </div>
                                        </div>

                                    </div>
                                    <button type="submit" class="btn btn-primary">Update</button> &nbsp;&nbsp;
                                </div>
                                </form>
                            </div>

                            {{--                            Billing section --}}
                            <div class="tab-pane" id="details_info">
                                <div class="col-lg-12 col-md-12">
                                    <div class="card">
                                        <ul class="row profile_state list-unstyled">
                                            <li class="col-lg-6 col-6">
                                                <div class="body">
                                                    <i class="fa fa-camera"></i>
                                                    <h5 class="mb-0 number count-to" data-from="0" data-to="2365"
                                                        data-speed="1000" data-fresh-interval="700">2365</h5>
                                                    <small>Shots View</small>
                                                </div>
                                            </li>
                                            <li class="col-lg-6 col-6">
                                                <div class="body">
                                                    <i class="fa fa-thumbs-o-up"></i>
                                                    <h5 class="mb-0 number count-to" data-from="0" data-to="1203"
                                                        data-speed="1000" data-fresh-interval="700">1203</h5>
                                                    <small>Likes</small>
                                                </div>
                                            </li>
                                            <li class="col-lg-6 col-6">
                                                <div class="body">
                                                    <i class="fa fa-comments-o"></i>
                                                    <h5 class="mb-0 number count-to" data-from="0" data-to="324"
                                                        data-speed="1000" data-fresh-interval="700">324</h5>
                                                    <small>Comments</small>
                                                </div>
                                            </li>
                                            <li class="col-lg-6 col-6 ">
                                                <div class="body">
                                                    <i class="fa fa-user"></i>
                                                    <h5 class="mb-0 number count-to" data-from="0" data-to="1980"
                                                        data-speed="1000" data-fresh-interval="700">1980</h5>
                                                    <small>Profile Views</small>
                                                </div>
                                            </li>
                                            <li class="col-lg-6 col-6">
                                                <div class="body">
                                                    <i class="fa fa-desktop"></i>
                                                    <h5 class="mb-0 number count-to" data-from="0" data-to="251"
                                                        data-speed="1000" data-fresh-interval="700">251</h5>
                                                    <small>Website View</small>
                                                </div>
                                            </li>
                                            <li class="col-lg-6 col-6">
                                                <div class="body">
                                                    <i class="fa fa-file-text text-warning"></i>
                                                    <h5 class="mb-0 number count-to" data-from="0" data-to="52"
                                                        data-speed="1000" data-fresh-interval="700">52</h5>
                                                    <small>Attachment</small>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                            {{--                            preferences details --}}
                            <div class="tab-pane" id="preferences">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="body">
                                            <h6>Your Login Sessions</h6>
                                            <ul class="list-unstyled list-login-session">
                                                <li>
                                                    <div class="login-session">
                                                        <i class="fa fa-laptop device-icon"></i>
                                                        <div class="login-info">
                                                            <h3 class="login-title">Mac - New York, United States</h3>
                                                            <span class="login-detail">Chrome - <span
                                                                    class="text-success">Active Now</span></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="login-session">
                                                        <i class="fa fa-desktop device-icon"></i>
                                                        <div class="login-info">
                                                            <h3 class="login-title">Windows 10 - New York, United States
                                                            </h3>
                                                            <span class="login-detail">Firefox - about an hour ago</span>
                                                        </div>
                                                        <button type="button" class="btn btn-link btn-logout"
                                                            data-container="body" data-toggle="tooltip"
                                                            title="Close this login session"><i
                                                                class="fa fa-times-circle text-danger"></i></button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="login-session">
                                                        <i class="fa fa-mobile fa-fw device-icon"></i>
                                                        <div class="login-info">
                                                            <h3 class="login-title">Android - New York, United States</h3>
                                                            <span class="login-detail">Android Browser - yesterday</span>
                                                        </div>
                                                        <button type="button" class="btn btn-link btn-logout"
                                                            data-container="body" data-toggle="tooltip"
                                                            title="Close this login session"><i
                                                                class="fa fa-times-circle text-danger"></i></button>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="body">
                                            <h6>Connected Social Media</h6>
                                            <ul class="list-unstyled list-connected-app">
                                                <li>
                                                    <div class="connected-app">
                                                        <i class="fa fa-facebook app-icon"></i>
                                                        <div class="connection-info">
                                                            <h3 class="app-title">FaceBook</h3>
                                                            <span class="actions"><a href="javascript:void(0);">View
                                                                    Permissions</a> <a href="javascript:void(0);"
                                                                    class="text-danger">Revoke Access</a></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="connected-app">
                                                        <i class="fa fa-twitter app-icon"></i>
                                                        <div class="connection-info">
                                                            <h3 class="app-title">Twitter</h3>
                                                            <span class="actions"><a href="javascript:void(0);">View
                                                                    Permissions</a> <a href="javascript:void(0);"
                                                                    class="text-danger">Revoke Access</a></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="connected-app">
                                                        <i class="fa fa-instagram app-icon"></i>
                                                        <div class="connection-info">
                                                            <h3 class="app-title">Instagram</h3>
                                                            <span class="actions"><a href="javascript:void(0);">View
                                                                    Permissions</a> <a href="javascript:void(0);"
                                                                    class="text-danger">Revoke Access</a></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="connected-app">
                                                        <i class="fa fa-linkedin app-icon"></i>
                                                        <div class="connection-info">
                                                            <h3 class="app-title">Linkedin</h3>
                                                            <span class="actions"><a href="javascript:void(0);">View
                                                                    Permissions</a> <a href="javascript:void(0);"
                                                                    class="text-danger">Revoke Access</a></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="connected-app">
                                                        <i class="fa fa-vimeo app-icon"></i>
                                                        <div class="connection-info">
                                                            <h3 class="app-title">Vimeo</h3>
                                                            <span class="actions"><a href="javascript:void(0);">View
                                                                    Permissions</a> <a href="javascript:void(0);"
                                                                    class="text-danger">Revoke Access</a></span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
