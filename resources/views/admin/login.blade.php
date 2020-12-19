@extends('admin.layouts.auth')

@section('content')
    <form action="" method="POST">
        @csrf
        <div class="row">
            <a class="navbar-brand text-center mx-auto mb-5" href="#">
                <img src="{{ asset('assets/img/logo.png') }}" width="140" alt="">
            </a>
        </div>
        @if(session('error'))
        <div class="alert alert-danger" role="alert">
            <span class="fe fe-minus-circle fe-16 mr-2"></span> <strong>Error! </strong> {{ session('error') }} 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
        </div>
        @endif
        <div class="form-group">
            <input type="email" class="form-control" id="username" placeholder="Email" name="email" required autocomplete="off">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
        </div>
        <div class="form-row">
            {{-- <div class="form-group col-6">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="rememberme" name="remember">
                    <label class="custom-control-label" for="rememberme">Remember Me</label>
                </div>
            </div> --}}
            <div class="form-group  ml-auto">
                <label class="forgot-psw">
                    <a id="forgot-psw" class="text-theme" href="#">Forgot Password?</a>
                </label>
            </div>
        </div>
        <button type="submit" class="btn btn-color-theme btn-rounded btn-lg btn-block">Sign In</button>
    </form>
@endsection


