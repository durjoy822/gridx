
<script src="{{asset('frontend')}}/assets/js/jquery-3.6.4.js"></script>
<script src="{{asset('frontend')}}/assets/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('frontend')}}/assets/js/aos.js"></script>
<script src="{{asset('frontend')}}/assets/js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

{{--Tostar--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
{{--owl carousel --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js"></script>

{{--work page assets--}}
<script src="{{asset('frontend')}}/work-page-assets/plugins/swiper-bundle.min.js"></script>
<script src="{{asset('frontend')}}/work-page-assets/isotope.pkgd.min.js"></script>
<script src="{{asset('frontend')}}/work-page-assets/imagesloaded.pkgd.min.js"></script>




{{--toster script code here --}}
<script>
    @if(Session::has('success'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
    toastr.success("{{ session('success') }}");
    @endif
        @if(Session::has('warning'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
    toastr.warning("{{ session('warning') }}");
    @endif
</script>



