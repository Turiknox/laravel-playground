<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="noindex,nofollow">
        <!-- Yield title -->
        <title>Please Login</title>

        <link rel="stylesheet" href="{{ Module::asset('cms:css/bootstrap-theme.css') }}">
        <link rel="stylesheet" href="{{ Module::asset('cms:css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ Module::asset('cms:css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ Module::asset('cms:css/style.css') }}">

        <script type="text/javascript" data-main="modules/cms/js/main" src="{{ Module::asset('cms:js/vendor/require.min.js') }}"></script>

    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
