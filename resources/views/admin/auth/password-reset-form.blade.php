@include('admin.layout.head')
<head>
    <title>password reset form</title>
</head>
<div id="wrapper" class="theme-cyan">
    <div class="vertical-align-wrap">
        <div class="vertical-align-middle auth-main">
            <div class="auth-box">
                <div class="top">
                    <img src="{{asset('backend')}}/assets/images/logo-white.svg" alt="Iconic">
                </div>
                <div class="card">
                    <div class="header">
                        <p class="lead">Password Reset Form</p>
                    </div>
                    <div class="body">
                        <p>Please enter valid information and input your new password for reseting your password! </p>
                        <form class="form-auth-small" action="{{route('new.password.get')}}" method="post">@csrf
                            <input type="hidden" value="{{$token}}" name="token">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" id="signup-password" placeholder="Inter register Email">
                                <div class="text-danger">@error('email'){{$message}}@enderror</div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="password" class="form-control" id="signup-password" placeholder="Inter new password">
                                <div class="text-danger">@error('password'){{$message}}@enderror</div>

                            </div>
                            <div class="form-group">
                                <input type="text" name="confirm_password" class="form-control" id="signup-password" placeholder="Confirm password">
                                <div class="text-danger">@error('confirm_password'){{$message}}@enderror</div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Password Reset </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('admin.layout.script')
