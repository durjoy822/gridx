<!doctype html>
<html lang="en">


<!-- Mirrored from wrraptheme.com/templates/iconic/dist/hr/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Apr 2023 06:31:32 GMT -->
<head>
   @include('admin.layout.head')
</head>
<body data-theme="light" class="font-nunito">
<div id="wrapper" class="theme-cyan">

    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img src="{{asset('backend')}}/assets/images/logo-icon.svg" width="48" height="48" alt="Iconic"></div>
            <p>Please wait...</p>
        </div>
    </div>

    <!-- Top navbar div start -->
 @include('admin.layout.top-navbar')

    <!-- main left menu -->
   @include('admin.layout.left-navbar')

    <!-- rightbar icon div -->
 @include('admin.layout.right-icone')
    <!-- mani page content body part -->
@yield('body')
</body>

@include('admin.layout.script')

<!-- Mirrored from wrraptheme.com/templates/iconic/dist/hr/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Apr 2023 06:32:09 GMT -->
</html>
