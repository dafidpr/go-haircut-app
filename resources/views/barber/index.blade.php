@extends('admin.layouts.app')
@section('content')

    <h3 class="page-title">{{ $barber->barber_name .' - '. $title}}</h3>
    @if ($nullable > 0)        
    <div class="alert alert-warning" role="alert">
        <span class="fe fe-alert-triangle fe-16 mr-2"></span> Data anda belum lengkap, silakan lengkapi data anda <a href="/barber/edit_profile">di sini.</a> 
    </div>
    @endif

@endsection