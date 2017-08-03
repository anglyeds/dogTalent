<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/style.css?'. time()) }}" rel="stylesheet">
    <link href="{{ asset('node_modules/simple-slideshow/src/slideshow.css') }}" rel="stylesheet">
    <link href="{{ asset('node_modules/SpryAssets/SpryMenuBarHorizontal.css') }}" rel="stylesheet">
    <link href="{{ asset('node_modules/SpryAssets/SprySlidingPanels.css') }}" rel="stylesheet">
    <link href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('bower_components/bootstrap-social/bootstrap-social.css') }}" rel="stylesheet">
    <link href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    @yield('css')
</head>
<body class="dogTalent">

    <div class="container">
        <div id="header">

            <div class="logo">
                <a href="#"><img class="img-responsive" src="{{ URL::asset('/storage/logo/hollywoof_logo.jpeg') }}" style=""></a>
            </div>

            <div class="topbutton">
                
            {{ menu('main_menu', 'layouts.nav') }} 

            </div>
             

        </div>
        <!-- End Header -->
        <div id="banner">
             @yield('banner')
        </div>

        <div id="footer">
           {{ menu('footer_menu', 'layouts.footer') }} 
        </div>
    </div>
   
        @yield('content')


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('node_modules/simple-slideshow/src/slideshow.js') }}"></script>
    <script src="{{ asset('node_modules/SpryAssets/SpryMenuBar.js') }}"></script>
    <script src="{{ asset('node_modules/SpryAssets/SprySlidingPanels.js') }}"></script>
    
    @yield('js')
</body>
</html>
