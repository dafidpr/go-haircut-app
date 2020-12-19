<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> {{ $title }} - Go Haircut App</title>
    <!-- Fevicon -->
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <!-- Start CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/simplebar.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/app-light.css') }}" id="lightTheme">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/app-dark.css') }}" id="darkTheme" disabled>
    <link href="{{ asset('admin/assets/plugins/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/jquery.timepicker.css') }}">
    @yield('style')
    <!-- End CSS -->

    <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/plugins/datatables/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/plugins/datatables/buttons.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/plugins/datatables/responsive.bootstrap4.min.css') }}">

    <script>
        var url = '{{ url("") }}';
    </script>
</head>

<body class="vertical light">
    <div class="wrapper">
        @yield('child')
        @yield('script')
    </div>
</body>

</html>