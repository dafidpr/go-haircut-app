@extends('admin.layouts.app')
@section('content')

    <h3 class="page-title">{{ $title }}</h3>
    <form action="{{ url('administrator/update_password/'. $user->id) }}" method="post" id="formSubmit" class="mt-5">
        @method("patch")
        <div class="col-md-5">
            <div class="form-group">
                <label for="">Old Password</label>
                <input type="password" class="form-control" name="old_password">
                <i class="small text-danger d-none" id="errorOldPassword"></i>
            </div>
            <div class="form-group mt-3">
                <label for="">New Password</label>
                <input type="password" class="form-control" name="new_password">
                <i class="small text-danger d-none" id="errorNewPassword"></i>
            </div>
            <div class="form-group mt-3">
                <label for="">Confirm New Password</label>
                <input type="password" class="form-control" name="confirm_password">
                <i class="small text-danger d-none" id="errorConfirmPassword"></i>
            </div>
            <button type="submit" class="btn btn-primary button-submit" title="Change Password" id="update_password"> Change Password</button>
        </div>
    </form>


@endsection