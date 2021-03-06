@extends('admin.layouts.base')

@section('child')

    @include('admin.layouts.partials.topbar')
    @include('admin.layouts.partials.sidebar')
    <main role="main" class="main-content">
      <div class="container-fluid">
          <div class="row justify-content-center">
              <div class="col-12">
                @yield('content')
              </div> <!-- .col-12 -->
          </div> <!-- .row -->
      </div> <!-- .container-fluid -->
      @include('admin.layouts.notification')
  </main>

    
@endsection

@section('script')
<!-- Start JS -->
<script src="{{ asset('admin/assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/popper.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/moment.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/simplebar.min.js') }}"></script>
<script src='{{ asset('admin/assets/js/daterangepicker.js') }}'></script>
<script src='{{ asset('admin/assets/js/jquery.timepicker.js') }}'></script>
<script src='{{ asset('admin/assets/js/jquery.stickOnScroll.js') }}'></script>
<script src="{{ asset('admin/assets/js/tinycolor-min.js') }}"></script>
<script src="{{ asset('admin/assets/js/select2.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/config.js') }}"></script>
<script src="{{ asset('admin/assets/js/apps.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
<!-- End JS -->
<script>
  $(document).ready(function(){
    $('.select2').select2({
        theme: 'bootstrap4',
    });
    $('.time-input').timepicker(
      {
          'scrollDefault': 'now',
          'zindex': '9999' /* fix modal open */
      });
  })
    window.dataLayer = window.dataLayer || [];

    function gtag()
    {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-56159088-1');
</script>
<!-- Start datatable js -->
<script src="{{ asset('admin/assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>

@if(isset($mod))
<!--Script Custom-->
<script src="{{ asset('admin/mod/' . $mod . '.js') }}"></script>
@endif

<script src="{{ asset('admin/mod/mod-main.js') }}"></script>

@endsection