@extends('layouts.app')
@section('content')
    
      <!-- Success Order Section -->
      <section class="success-order">
        <div class="container mt-5">
            <div class="row">
                <img src="{{ asset('assets/img/ilustration/success-order.svg') }}" class="mx-auto" width="360" alt="">
            </div>
            <h4 class="text-center font-weight-bold mt-3">Yeay, Booking Berhasil</h4>
            <h4 class="text-center font-weight-bold">Cek email kamu ya!</h4>
        </div>
      </section>
@endsection