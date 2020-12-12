@extends('admin.layouts.base')

@section('child')
<div class="xp-authenticate-bg"></div>
<!-- Start XP Container -->
<div id="xp-container" class="xp-container">

    <!-- Start Container -->
    <div class="container">

        <!-- Start XP Row -->
        <div class="row vh-100 align-items-center">
            <!-- Start XP Col -->
            <div class="col-lg-12 ">

                <!-- Start XP Auth Box -->
                <div class="xp-auth-box">

                    <div class="card">
                        <div class="card-body">
                            @yield('content')
                        </div>
                    </div>

                </div>
                <!-- End XP Auth Box -->

            </div>
            <!-- End XP Col -->
        </div>
        <!-- End XP Row -->
    </div>
    <!-- End Container -->
</div>
<!-- End XP Container -->
@endsection

@section('script')
<!-- Start JS -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/modernizr.min.js"></script>
<script src="assets/js/detect.js"></script>
<script src="assets/js/jquery.slimscroll.js"></script>
<script src="assets/js/sidebar-menu.js"></script>
<!-- Main JS -->
<script src="assets/js/main.js"></script>
<!-- End JS -->
@include('admin.plugins.notify')
@endsection