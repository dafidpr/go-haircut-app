@extends('admin.layouts.base')
@section('style')
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
@endsection
@section('child')
<div class="container">
    <div class="row mt-5">
        <div class="col-md-4 mx-auto">
            <div class="card mb-4">
                <div class="card-body">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

