@extends('admin.layouts.app')
@section('content')

    <h3 class="page-title">{{ $title }}</h3>
    <div class="my-4">
        <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Profile</a>
            </li>
        </ul>
            <form method="post" action="{{ url('administrator/edit_profile/'. $user->id) }}" id="formSubmit" enctype="multipart/form-data">
            @method('patch')
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label >Nama Lengkap</label>
                        <input type="text" class="form-control" value="{{ $user->full_name }}" placeholder="Nama Lenkap" name="name" autocomplete="off">
                        <i class="small text-danger d-none" id="errorName"></i>
                    </div>
                    <div class="form-group col-md-6">
                        <label >Email</label>
                        <input type="text" class="form-control" value="{{ $user->email }}" placeholder="Email" name="email" autocomplete="off">
                        <i class="small text-danger d-none" id="errorEmail"></i>
                    </div>
                </div>
                <div class="form-group">
                    <label >Picture</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="pic" id="inputGroupFile02">
                        <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
                    </div>
                    <i class="small text-danger d-none" id="errorPic"></i>
                </div>
            </div>
        <hr class="my-4">
        <button type="submit" class="btn btn-primary button-submit" id="edit_profile" title="Save Changes">Save Change</button>
    </form>


@endsection