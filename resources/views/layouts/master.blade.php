<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token: https://laravel.com/docs/5.6/csrf -->
    <meta name='csrf-token' content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'MongoDB Portfolio') }}</title>

    <meta name='keywords' content='MongoDB, Laravel, PHP, MongoDB CRUD Operations'>

    <meta name='author' content='De Jong Yeong'>

    <meta name='description' content='MongoDB Portfolio with PHP Laravel Framework association with Advanced Database Programming module in IT Tralee'>

    <!-- Reference: https://stackoverflow.com/questions/4617073/meta-tag-apple-mobile-web-app-capable-for-android -->
    <meta name='mobile-web-app-cabpable' content='yes'>
    <meta name='apple-mobile-web-app-capable' content='yes'>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href='/css/app.css' rel='stylesheet' type='text/css'>

    @yield('styles')

    <!-- Scripts Reference: https://laravel.com/docs/5.6/csrf -->
    <script type='text/javascript'>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>

</head>
<body>
    
    @yield('main')

    @yield('modals')

    <!-- Scripts -->
    <script src='/js/app.js'></script>

    @yield('script')

</body>
</html>