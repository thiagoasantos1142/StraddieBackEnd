<!doctype html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light"
    data-menu-styles="dark" loader="disable">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="vexel – Laravel Bootstrap 5  Admin & Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords"
        content="admin panel template, admin dashboard template, admin panel, bootstrap admin template, dashboard, laravel, bootstrap dashboard, admin dashboard, admin panel laravel template, laravel framework, admin laravel, laravel admin panel.">

    <!-- TITLE -->
    <title>Vexel – Laravel Bootstrap 5 Admin &amp; Dashboard Template </title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('build/assets/images/brand/favicon.ico') }}" type="image/x-icon">

    <!-- ICONS CSS -->
    <link href="{{ asset('build/assets/iconfonts/icons.css') }}" rel="stylesheet">

    <!-- Main Theme Js -->
    <script src="{{ asset('build/assets/main.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('build/assets/libs/awesome-notifications/style.css') }}">

    <link rel="stylesheet" href="{{ asset('build/assets/libs/sweetalert2/sweetalert2.min.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet">

    @include('layouts.components.styles')

    <!-- APP CSS & APP SCSS -->
    @vite(['resources/sass/app.scss'])


    <script src="{{ asset('build/assets/jquery-3.7.1.js') }}"></script>

    <script src="{{ asset('build/assets/jquery.mask.js') }}"></script>
    
    @yield('styles')


    <!-- Select2 Cdn -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    @vite(['resources/js/basicMask.js'])
    
    @vite(['resources/assets/js/components/customFilter.js'])

    <style>
        #awn-toast-container {
            z-index: 100000 !important;
        }

        .active-btn {
            color: #fff;
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }
    </style>

</head>

<body class="app sidebar-mini">

    <!-- Switcher -->
    @include('layouts.components.switcher')
    <!-- End switcher -->

    <!-- GLOBAL-LOADER -->
    <div id="loader">
        <img src="{{ asset('build/assets/images/loader.svg') }}" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOBAL-LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

            <!-- Main-Header -->
            @include('layouts.components.main-header')
            <!-- End Main-Header -->

            <!--Main-Sidebar-->
            @include('layouts.components.main-sidebar')
            <!-- End Main-Sidebar-->

            <!--app-content open-->
            <div class="main-content app-content mt-0">

                @yield('content')

            </div>
            <!-- END APP-CONTENT -->

        </div>
        <!--app-content closed-->

        <!-- Country-selector modal -->
        @include('layouts.components.modal')
        <!-- End Country-selector modal -->

        <!-- Footer opened -->
        @include('layouts.components.footer')
        <!-- End Footer -->

        @yield('modals')

    </div>
    <!-- END PAGE-->

    <!-- SCRIPTS -->
    @include('layouts.components.scripts')

    <!-- Sticky JS -->
    <script src="{{ asset('build/assets/sticky.js') }}"></script>

    <script src="{{ asset('build/assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>

    @vite('resources/js/bootstrap.js')

    <!-- APP JS-->
    @vite('resources/js/app.js')
    <!-- END SCRIPTS -->

</body>

</html>
