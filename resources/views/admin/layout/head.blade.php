<title>Iconic HR-@yield('title')</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Iconic Bootstrap 4.5.0 Admin Template">
<meta name="author" content="WrapTheme, design by: ThemeMakker.com">
<link rel="icon" href="favicon.ico" type="image/x-icon">

<!-- VENDOR CSS -->
<link rel="stylesheet" href="{{asset('backend')}}/assets/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="{{asset('backend')}}/assets/vendor/font-awesome/css/font-awesome.min.css">

<!-- Page CSS -->
<link rel="stylesheet" href="{{asset('backend')}}/assets/vendor/chartist/css/chartist.min.css">
<link rel="stylesheet" href="{{asset('backend')}}/assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css">
<link rel="stylesheet" href="{{asset('backend')}}/assets/vendor/toastr/toastr.min.css">

<!-- MAIN Project CSS file -->
<link rel="stylesheet" href="{{asset('backend')}}/assets/css/main.css">

{{--data table --}}
<link rel="stylesheet" href="{{asset('backend')}}/assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="{{asset('backend')}}/assets/vendor/jquery-datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css">
<link rel="stylesheet" href="{{asset('backend')}}/assets/vendor/jquery-datatable/fixedeader/dataTables.fixedheader.bootstrap4.min.css">
<link rel="stylesheet" href="{{asset('backend')}}/assets/vendor/sweetalert/sweetalert.css"/>

{{--toster--}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
{{--tiny mc--}}
<script src='https://cdn.tiny.cloud/1/no-api-key/tinymce/4/tinymce.min.js'></script>
<script>
    tinymce.init({
        selector: '.tinymce',
        height: 300,
        menubar: true,
        dialog_type : "modal",
        relative_urls : false,
        remove_script_host : false,
        convert_urls : false,
        plugins: 'textcolor print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap emoticons',
        imagetools_cors_hosts: ['picsum.photos'],
        menubar: 'file edit view insert format tools table help',
        toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl | forecolor backcolor',
        toolbar_sticky: true,
        autosave_ask_before_unload: true,
        autosave_interval: '30s',
        autosave_prefix: '{path}{query}-{id}-',
        autosave_restore_when_empty: false,
        autosave_retention: '2m',
        image_advtab: true,
        content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
    });
</script>
