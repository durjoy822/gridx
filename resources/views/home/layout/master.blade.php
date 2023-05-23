<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from wpriverthemes.com/landing/gridx-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Apr 2023 17:55:31 GMT -->
<head>
   @include('home.layout.head')
</head>
<body>

<main class="main-homepage">

    <!-- Header -->
@include('home.layout.header')
    <!-- About -->
   @yield('body')

    <!-- Footer -->
  @include('home.layout.footer')

</main>

{{--script--}}
@include('home.layout.script')
</body>

<!-- Mirrored from wpriverthemes.com/landing/gridx-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Apr 2023 17:55:56 GMT -->
</html>
