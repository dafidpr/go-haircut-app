<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ $title }} | Ganteng Maksimal</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#0BAF7B">
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/switchery/dist/switchery.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/niceselect/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/material-date-range-picker/dist/duDatepicker-theme.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/material-date-range-picker/dist/duDatepicker.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/material-date-range-picker/dist/duDatepicker-theme.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/autocomplete/jquery.autocomplete.css') }}">
    @yield('css')
</head>

<body>
    <div class="container mb-5">
        <div class="row">
           <div class="mx-auto mt-5">
                <img src="{{ asset('assets/img/logo.png') }}" width="150" alt="">
           </div>
        </div>
        <div class="row mt-5">
            @yield('content')
        </div>
    </div>



    <!-- ========================= JS here ========================= -->
    <script src="{{ asset('assets/vendors/jquery/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/popper/popper.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/switchery/dist/switchery.js') }}"></script>
    <script src="{{ asset('assets/vendors/niceselect/js/jquery.nice-select.js') }}"></script>
    <script src="{{ asset('assets/vendors/material-date-range-picker/dist/duDatepicker.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/feather-icons/dist/feather.js') }}"></script>
    <script src="{{ asset('assets/vendors/autocomplete/jquery.autocomplete.js') }}"></script>
    @yield('js')
    @if(isset($mod))
    <!--Script Custom-->
    <script src="{{ asset('mod/' . $mod . '.js') }}"></script>
    @endif

    <script>
        $(document).ready(function() {
            feather.replace();
        });
    </script>
</body>

</html>
