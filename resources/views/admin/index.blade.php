@extends('admin.layouts.app')
@section('content')

    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h3 class="page-title">Let's start</h3>
                </div> <!-- .col-12 -->
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->
        @include('admin.layouts.notification')
    </main>

    @endsection