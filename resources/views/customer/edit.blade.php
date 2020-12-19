@extends('layouts.app')
@section('content')
<!-- Hero Section -->
@include('customer.hero')
 <section class="form-booking mt-4 p-4">
     <div class="container">
       <h3 class="font-weight-bold">{{ $title }}</h3>
       <form class="mt-5" method="post" action="{{ url('customer/edit_profile/'. $customer->id) }}" id="formSubmit" enctype="multipart/form-data">
        @method('patch')
             <div class="form-group row">
                 <label class="col-sm-2 col-form-label">Nama <span class="text-danger">*</span></label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" value="{{ $customer->customer_name }}" placeholder="Nama Lengkap" name="name" id="name" autocomplete="off">
                    <i class="small text-danger d-none" id="errorName"></i>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Email <span class="text-danger">*</span></label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" value="{{ $customer->email }}" placeholder="Email" name="email" id="email" autocomplete="off">
                    <i class="small text-danger d-none" id="errorEmail"></i>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Foto</label>
                <div class="col-sm-5">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="pic" id="inputGroupFile02">
                        <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
                      </div>
                    <i class="small text-danger d-none" id="errorPic"></i>
                 </div>
             </div>
             <div class="form-group row">
                 <div class="col-sm-7 mt-4 ">
                    <button type="submit" class="btn btn-color-theme button-submit" id="edit_profile" title="Save Changes">Save Changes</button>
                 </div>
             </div>
         </form>
     </div>
 </section>
 @endsection  
 