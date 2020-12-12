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


    @include('layouts.partials.header')

    @yield('content')

    @include('layouts.partials.footer')

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
    <script>
        $(document).ready(function() {
            feather.replace();
            $('select').niceSelect();
            duDatepicker('.datepicker', {
                format: 'dd-mm-yyyy'
            });

        });
        var elems = document.querySelectorAll('.js-switch');

        elems.forEach(function(html) {
            var switchery = new Switchery(html, { color: '#0BAF7B', jackColor: '#fff' });
        });
    </script>
</body>

</html>
