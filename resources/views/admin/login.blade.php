@extends('admin.layouts.auth')

@section('content')
<h3 class="text-center mt-0">
    <a href="#" class="xp-web-logo">
        <img src="{{ asset('admin/assets/images/logo/logo.png') }}" height="40" alt="logo">
    </a>
</h3>
<div class="p-3">
    <form action="" method="POST">
        @csrf
        {{-- <div class="text-center mb-3">
            <h4 class="text-black">Login !</h4>
        </div> --}}
        <div class="form-group">
            <input type="email" class="form-control" id="username" placeholder="Email" name="email" required autocomplete="off">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
        </div>
        <div class="form-row">
            <div class="form-group col-6">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="rememberme" name="remember">
                  <label class="custom-control-label" for="rememberme">Remember Me</label>
                </div>
            </div>
            <div class="form-group col-6 text-right">
              <label class="forgot-psw">
                <a id="forgot-psw" href="page-forgotpsw.html">Forgot Password?</a>
              </label>
            </div>
        </div>
      <button type="submit" class="btn btn-primary btn-rounded btn-lg btn-block">Sign In</button>
    </form>
</div>
@endsection