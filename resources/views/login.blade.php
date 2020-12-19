@extends('layouts.auth')
@section('content')
<div class="col-md-7">
    <img src="{{ asset('assets/img/ilustration/sign-in.svg') }}" class="ml-3 img-hidden" width="380" alt="">
</div>
<div class="col-md-5">
    <div class="card p-3 border-0 shadow-sm b-radius-10">
        <div class="card-body">
            <h4>Masuk</h4>
            <p class="text-muted">Masuk dan nikmati beragam manfaat</p>
            @if(session('error'))
            <div class="alert alert-danger" role="alert">
                <span class="fe fe-minus-circle fe-16 mr-2"></span><strong>Error! </strong> {{ session('error') }} 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
            </div>
            @elseif(session('success'))
            <div class="alert alert-success" role="alert">
                <span class="fe fe-minus-circle fe-16 mr-2"></span><strong>Success! </strong> {{ session('success') }} 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
            </div>

            @endif
            <form action="" class="mt-4" method="post">
                @csrf
                <div class="form-group">
                    <input type="text" placeholder="Email" name="email" class="form-control" required autocomplete="off">
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                    <div class="input-group-append show-password">
                        <span class="input-group-text input-group-show-password" id="basic-addon2">
                            <i class="fas fa-eye-slash"></i>
                        </span>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <small class="ml-auto pb-3"><a href="" class="text-theme text-decoration-none">Forgot Password ?</a></small>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-color-theme btn-block p-2">Masuk</button>
                </div>
                <p class="text-center">Belum punya akun ?  <a href="register" class="text-decoration-none text-theme">Daftar</a></p>
            </form>
        </div>
    </div>
</div>

@endsection