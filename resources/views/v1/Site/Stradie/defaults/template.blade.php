<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Titulo da página</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    @vite(['resources/v1/site/css/app.css','resources/js/my-app.js'])
    {{-- <link rel="stylesheet" href="{{ asset('build\assets\app-5be8aace.css') }}">
    <script src="{{ asset('build\assets\jquery-3.7.1.js') }}"></script>
    <script type="module" src="{{ asset('build\assets\app-7de87c73.js') }}"></script> --}}
</head>

<body>
    @yield('content')
    {{-- <script type="module" src="{{ asset('build\assets\app-b188b93a.js') }}"></script> --}}
    @vite(['resources/v1/site/js/app.js'])
</body>

</html>
