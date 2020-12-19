@extends('layouts.auth')
@section('content')
<div class="col-md-7">
    <img src="{{ asset('assets/img/ilustration/register.svg') }}" class="img-hidden" width="500" alt="">
</div>
<div class="col-md-5">
    <div class="card p-3 border-0 shadow-sm b-radius-10">
        <div class="card-body">
            <h4>Daftar</h4>
            <p class="text-muted">Daftar dan nikmati beragam manfaat</p>
            <form action="register" method="post" class="mt-4">
            @csrf
                <div class="form-group">
                    <input type="text" placeholder="Nama Lengkap" name="full_name" value="{{ old('full_name') }}" class="form-control @error('full_name') is-invalid @enderror" autocomplete="off">
                    @error('full_name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" name="email" id="email" autocomplete="off">
                    @error('email')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password">
                    <div class="input-group-append show-password">
                        <span class="input-group-text input-group-show-password" id="basic-addon2">
                            <i class="fas fa-eye-slash"></i>
                        </span>
                    </div>
                </div>
                @error('password')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
                <div class="input-group mb-3">
                    <input type="password" class="form-control @error('password_confirm') is-invalid @enderror" name="password_confirm" id="password2" placeholder="Konfirmasi Password">
                    <div class="input-group-append show-password-confirm">
                        <span class="input-group-text input-group-show-password-confirm" id="basic-addon2">
                            <i class="fas fa-eye-slash"></i>
                        </span>
                    </div>
                </div>
                @error('password_confirm')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <button type="submit" class="btn btn-color-theme btn-block p-2">Daftar</button>
                </div>
                <p class="text-center">Sudah punya akun ?  <a href="login" class="text-decoration-none text-theme">Masuk</a></p>
            </form>
        </div>
    </div>
</div>
@endsection