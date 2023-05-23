@include('admin.layout.head')
<div id="wrapper" class="theme-cyan">
    <div class="vertical-align-wrap">
        <div class="vertical-align-middle auth-main">
            <div class="auth-box">
                <div class="top">
                    @isset($logo->image)
                    <img src="{{asset($logo->image)}}" alt="Iconic">
                    @endisset
                </div>
                <div class="card">
                    <div class="header">
                        <p class="lead">Create an account</p>
                    </div>
                    <div class="body">
                        <form action="{{route('admin.store')}}" method="post" class="form-auth-small">@csrf
                            <div class="form-group">
                                <label for="user_name" class="control-label sr-only">User Name</label>
                                <input type="text" class="form-control" name="name" id="user_name" placeholder="User name">
                                <div class="text-danger">@error('name') {{$message}}@enderror</div>
                            </div>
                            <div class="form-group">
                                <label for="signup-email" class="control-label sr-only">Email</label>
                                <input type="email" class="form-control" name="email" id="signup-email" placeholder="Your email">
                                <div class="text-danger">@error('email') {{$message}}@enderror</div>
                            </div>
                            <div class="form-group">
                                <label for="signup-password" class="control-label sr-only">Password</label>
                                <input type="password" class="form-control" name="password" id="signup-password" placeholder="Password">
                                <div class="text-danger">@error('password') {{$message}}@enderror</div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block">REGISTER</button>
                            <div class="bottom">
                                <span class="helper-text">Already have an account? <a href="{{route('login')}}">Login</a></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('admin.layout.script')

