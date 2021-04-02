<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
<<<<<<< HEAD
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    @livewireStyles
=======
>>>>>>> 960dee0f7084ae2b12490abb3932889ddb54fdec
    <!-- asset css -->
    @include('admin.layouts._asset_header')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        @include('admin.layouts.header')

        @include('admin.layouts.sidebar')

        @yield('content')

        @include('admin.layouts.footer')
    </div>
    <!-- ./wrapper -->

    <!-- asset script -->
    @include('admin.layouts._asset_footer')
<<<<<<< HEAD
    @livewireScripts
=======

>>>>>>> 960dee0f7084ae2b12490abb3932889ddb54fdec
</body>

</html>