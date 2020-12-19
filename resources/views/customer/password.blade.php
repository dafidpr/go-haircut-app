@extends('layouts.app')
@section('content')
<!-- Hero Section -->
@include('customer.hero')
 <section class="form-booking mt-4 p-4">
     <div class="container">
       <h3 class="font-weight-bold">{{ $title }}</h3>
       <form class="mt-5" method="post" action="{{ url('customer/update_password/'. $customer->id) }}" id="formSubmit">
        @method('patch')
             <div class="form-group row">
                 <label class="col-sm-2 col-form-label">Old Password</label>
                <div class="col-sm-5">
                    <input type="password" class="form-control" placeholder="Old Password" name="old_password" id="old_password">
                    <i class="small text-danger d-none" id="errorOldPassword"></i>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">New Password</label>
                <div class="col-sm-5">
                    <input type="password" class="form-control" placeholder="New Password" name="new_password" id="new_password">
                    <i class="small text-danger d-none" id="errorNewPassword"></i>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Confirm Password</label>
                <div class="col-sm-5">
                    <input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password" id="confirm_password">
                    <i class="small text-danger d-none" id="errorConfirmPassword"></i>
                </div>
            </div>
             <div class="form-group row">
                 <div class="col-sm-7 mt-4 ">
                    <button type="submit" class="btn btn-color-theme button-submit" id="edit_password" title="Save Changes">Save Changes</button>
                 </div>
             </div>
         </form>
     </div>
 </section>
 @endsection  
 