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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">

    @yield('styles')

    <!-- Scripts Reference: https://laravel.com/docs/5.6/csrf -->
    <script type='text/javascript'>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>

        window.setTimeout(function() {
            $('.alert').fadeTo(500,0).slideUp(500, function() {
                $(this).remove();
            });
        }, 3000);
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