@include('admin.layout.head')
<div id="wrapper" class="theme-cyan">
    <div class="vertical-align-wrap">
        <div class="vertical-align-middle auth-main">
            <div class="auth-box">
                <div class="top">
                    <img src="{{asset('backend')}}/assets/images/logo-white.svg" alt="Iconic">
                </div>
                <div class="card">
                    <div class="header">
                        <p class="lead">Recover my password</p>
                    </div>
                    <div class="body">
                        <p>Please enter your email address below to receive instructions for resetting password.</p>
                        <form class="form-auth-small" action="{{route('sent.email')}}">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" value="{{old('email')}}" id="signup-password" placeholder="Email">
                                <div class="text-danger">@error('email'){{$message}}@enderror</div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block">SEND PASSWORD LINK</button>
                            <div class="bottom">
                                <span class="helper-text">Know your password? <a href="{{route('login')}}">Login</a></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('admin.layout.script')
