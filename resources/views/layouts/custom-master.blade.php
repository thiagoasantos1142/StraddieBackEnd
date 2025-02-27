<!doctype html>
<html lang="en"  dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="dark">

    <head>

        <!-- META DATA -->
        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Straddie Capital">
        <meta name="author" content="Clin Technologies">
        <meta name="keywords" content="admin panel template, admin dashboard template, admin panel, bootstrap admin template, dashboard, laravel, bootstrap dashboard, admin dashboard, admin panel laravel template, laravel framework, admin laravel, laravel admin panel.">

        <!-- TITLE -->
        <title>Straddie Capital </title>

        <!-- Authentication JS -->
        @vite('resources/assets/js/authentication-main.js')

        <!-- Favicon -->
        <link rel="icon" href="{{asset('build/assets/images/brand/favicon.ico')}}" type="image/x-icon">

        <!-- BOOTSTRAP CSS -->
        <link id="style" href="{{asset('build/assets/libs/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        
        <!-- ICONS CSS -->
        <link href="{{asset('build/assets/iconfonts/icons.css')}}" rel="stylesheet">

        <!-- APP CSS & APP SCSS -->
        @vite(['resources/sass/app.scss'])

        @yield('styles')

    </head>

	<body class="login-img">

        <!-- START SWITCHER -->
        @include('layouts.components.custom-switcher')
        <!-- END SWITCHER -->

        <!-- BACKGROUND-IMAGE -->
        <div class="">

            <!-- PAGE -->
            <div class="page">

                @yield('content')

            </div>
            <!-- End PAGE -->
        </div>

        <!-- Bootstrap JS -->
    	<script src="{{asset('build/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        
        @yield('scripts')
        
        <!-- Custom-Switcher JS -->
        @vite('resources/assets/js/custom-switcher.js')

    </body>
    
</html>    


