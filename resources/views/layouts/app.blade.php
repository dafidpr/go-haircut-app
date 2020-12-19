<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ $title }} | Ganteng Maksimal</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#0BAF7B">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
    <link href="{{ asset('admin/assets/plugins/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css">
    @yield('css')

    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/plugins/datatables/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/plugins/datatables/buttons.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/plugins/datatables/responsive.bootstrap4.min.css') }}">
    <script>
        var url = '{{ url("") }}';
    </script>
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
    <script src="{{ asset('admin/assets/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
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
    <script src="{{ asset('admin/assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>

    @if(isset($mod))
    <!--Script Custom-->
    <script src="{{ asset('mod/' . $mod . '.js') }}"></script>
    @endif
    <script src="{{ asset('admin/mod/mod-main.js') }}"></script>
</body>

</html>
