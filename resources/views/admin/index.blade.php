@extends('admin.layouts.app')
@section('content')

    <h3 class="page-title">{{ $title }}</h3>
    <div class="row my-4">
        <div class="col-md-4">
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col">
                  <small class="text-muted mb-1">Pengguna</small>
                  <h3 class="card-title mb-0">1168</h3>
                  <p class="small text-muted mb-0"><span class="fe fe-arrow-down fe-12 text-danger"></span><span>-18.9% Last week</span></p>
                </div>
                <div class="col-4 text-right">
                    <span class="fe fe-32 fe-users text-muted mb-0"></span>
                </div>
              </div> <!-- /. row -->
            </div> <!-- /. card-body -->
          </div> <!-- /. card -->
        </div> <!-- /. col -->
        <div class="col-md-4">
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col">
                  <small class="text-muted mb-1">Barber</small>
                  <h3 class="card-title mb-0">68</h3>
                  <p class="small text-muted mb-0"><span class="fe fe-arrow-up fe-12 text-warning"></span><span>+1.9% Last week</span></p>
                </div>
                <div class="col-4 text-right">
                    <span class="fe fe-32 fe-briefcase text-muted mb-0"></span>
                </div>
              </div> <!-- /. row -->
            </div> <!-- /. card-body -->
          </div> <!-- /. card -->
        </div> <!-- /. col -->
        <div class="col-md-4">
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col">
                  <small class="text-muted mb-1">Visitors</small>
                  <h3 class="card-title mb-0">108</h3>
                  <p class="small text-muted mb-0"><span class="fe fe-arrow-up fe-12 text-success"></span><span>37.7% Last week</span></p>
                </div>
                <div class="col-4 text-right">
                    <span class="fe fe-32 fe-shopping-bag text-muted mb-0"></span>
                </div>
              </div> <!-- /. row -->
            </div> <!-- /. card-body -->
          </div> <!-- /. card -->
        </div> <!-- /. col -->
      </div> <!-- end section -->

@endsection