<!-- Javascript -->
<script src="{{asset('backend')}}/assets/bundles/libscripts.bundle.js"></script>
<script src="{{asset('backend')}}/assets/bundles/vendorscripts.bundle.js"></script>

<!-- page vendor js file -->
<script src="{{asset('backend')}}/assets/vendor/toastr/toastr.js"></script>
<script src="{{asset('backend')}}/assets/bundles/chartist.bundle.js"></script>
<script src="{{asset('backend')}}/assets/bundles/knob.bundle.js"></script> <!-- Jquery Knob-->

<!-- page js file -->
<script src="{{asset('backend')}}/assets/bundles/mainscripts.bundle.js"></script>
<script src="{{asset('backend')}}/assets/js/index.js"></script>

<script src="{{asset('backend')}}/assets/bundles/libscripts.bundle.js"></script>
<script src="{{asset('backend')}}/assets/bundles/vendorscripts.bundle.js"></script>
<script src="{{asset('backend')}}/assets/bundles/datatablescripts.bundle.js"></script>
<script src="{{asset('backend')}}/assets/vendor/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
<script src="{{asset('backend')}}/assets/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
<script src="{{asset('backend')}}/assets/vendor/jquery-datatable/buttons/buttons.colVis.min.js"></script>
<script src="{{asset('backend')}}/assets/vendor/jquery-datatable/buttons/buttons.html5.min.js"></script>
<script src="{{asset('backend')}}/assets/vendor/jquery-datatable/buttons/buttons.print.min.js"></script>
<!-- page js file -->
{{--<script src="{{asset('backend')}}/assets/bundles/mainscripts.bundle.js"></script>--}}
<script src="{{asset('backend')}}/assets/js/pages/tables/jquery-datatable.js"></script>
{{--toster js--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
{{--summernote.js--}}
<script src="{{asset('backend')}}/assets/vendor/summernote/dist/summernote.js"></script>

<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>


<script>
    const xArray = [ {{$subscriber}}, 24, ];
    const yArray = ["Total Project ", "Total Blog ", "Total Subscriber","Total viewer "];

    const data = [{
        x:xArray,
        y:yArray,
        type:"bar",
        orientation:"h",
        marker: {color:"rgba(255,0,0,0.6)"}
    }];

    const layout = {title:"Represented chart "};

    Plotly.newPlot("myPlot", data, layout);
</script>




{{--toster script code --}}
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

{{--chart script code --}}
{{--<script>--}}
{{--    const xArray = ["Italy", "France", "Spain", "USA", "Argentina"];--}}
{{--    const yArray = [55, 49, 44, 24, 15];--}}

{{--    const layout = {title:"World Wide Wine Production"};--}}

{{--    const data = [{labels:xArray, values:yArray, type:"pie"}];--}}

{{--    Plotly.newPlot("myPlot", data, layout);--}}
{{--</script>--}}

