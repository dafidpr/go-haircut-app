@extends('layouts.auth')
@section('content')
<div class="col-md-7">
    <img src="{{ asset('assets/img/ilustration/register-member.svg') }}" class="img-hidden" width="500" alt="">
</div>
<div class="col-md-5">
    <div class="card p-3 border-0 shadow-sm b-radius-10">
        <div class="card-body">
            <h4>Daftar member</h4>
            <p class="text-muted">Daftar untuk cari lebih banyak pelanggan</p>
            <form action="register-member" class="mt-4" method="post">
                @csrf
                <div class="form-group">
                    <input type="text"  value="{{ old('barber_name') }}" placeholder="Nama Barber" class="form-control @error('barber_name') is-invalid @enderror" name="barber_name" autocomplete="off">
                    @error('barber_name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="text"  value="{{ old('owner_name') }}" placeholder="Nama Owner" class="form-control @error('owner_name') is-invalid @enderror" name="owner_name" autocomplete="off">
                    @error('owner_name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="text"  value="{{ old('email') }}" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" autocomplete="off">
                    @error('email')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" id="password">
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
                    <input type="password" class="form-control @error('confirm_password') is-invalid @enderror" name="confirm_password" placeholder="Konfirmasi Password" id="password2">
                    <div class="input-group-append show-password-confirm">
                        <span class="input-group-text input-group-show-password-confirm" id="basic-addon2">
                            <i class="fas fa-eye-slash"></i>
                        </span>
                    </div>
                </div>
                @error('confirm_password')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <button class="btn btn-color-theme btn-block p-2">Daftar</button>
                </div>
                <p class="text-center">Sudah punya akun ?  <a href="/member/login" class="text-decoration-none text-theme">Masuk</a></p>
            </form>
        </div>
    </div>
</div>
@endsection