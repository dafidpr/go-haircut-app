@extends('admin.layouts.app')
@section('content')

    <h3 class="page-title">{{ $barber->barber_name .' - '.$title }}</h3>

    <div class="my-4">
        <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Profile</a>
            </li>
        </ul>
            <div id="home" class="tab-pane fade show active" role="tabpanel" aria-labelledby="home-tab">
                <div class="row mt-5 align-items-center">
                    <div class="col-md-3 text-center mb-5">
                        <form method="post" action="{{ url('barber/edit_profile/'. $barber->id) }}" id="formSubmit" enctype="multipart/form-data">
                        @method('patch')
                            <div class="avatar avatar-xl item-img-profile">
                                <div class="embed-responsive">
                                    <input type="file" id="file" name="pic" class="d-none">
                                    {{-- <input type="hidden" name="submit"> --}}
                                    <img src="{{ asset('assets/img/barber/barber_profile').'/'.$barber->profile_pic }}" alt="..." class="avatar-img rounded-circle w-75" id="imgPreview">
                                    <div class="cover">
                                        <label for="file">
                                            <div class="trigger">
                                                <i class="fe fe-camera"></i>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row align-items-center">
                                <div class="col-md-7">
                                <h4 class="mb-1">{{ $barber->barber_name }}</h4>
                                <p class="small mb-3"><span class="badge badge-dark p-2"> <i class="fe fe-map-pin"></i> {{ $barber->address }}</span></p>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col">
                                <p class="small mb-0 text-muted"><i class="fe fe-mail"></i> {{ $barber->email }}</p>
                                <p class="small mb-0 text-muted"><i class="fe fe-message-square"></i> {{ $barber->whatsapp }}</p>
                                <p class="small mb-0 text-muted"><i class="fe fe-calendar"></i> {{ $barber->opening_hours }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <i class="small text-danger d-none" id="errorPicture"></i>
                <hr class="my-4">

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label >Nama Barber</label>
                        <input type="text" class="form-control" value="{{ $barber->barber_name }}" placeholder="Nama Barber" name="barber_name" autocomplete="off">
                        <i class="small text-danger d-none" id="errorBarberName"></i>
                    </div>
                    <div class="form-group col-md-6">
                        <label >Nama Owner</label>
                        <input type="text" class="form-control" value="{{ $barber->owner_name }}" placeholder="Nama Owner" name="owner_name" autocomplete="off">
                        <i class="small text-danger d-none" id="errorOwnerName"></i>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label >Email</label>
                        <input type="text" class="form-control" value="{{ $barber->email }}" placeholder="Email" name="email" autocomplete="off">
                        <i class="small text-danger d-none" id="errorEmail"></i>
                    </div>
                    <div class="form-group col-md-6">
                        <label >Whatsapp</label>
                        <input type="text" class="form-control" value="{{ $barber->whatsapp }}" placeholder="Whatsapp" name="whatsapp" autocomplete="off">
                        <i class="small text-danger d-none" id="errorWhatsapp"></i>
                    </div>
                </div>
                <h4 class="mt-2">Jam Operasional</h4>
                @php
                    function multiexplode ($delimiters,$data) {
                        $MakeReady = str_replace($delimiters, $delimiters[0], $data);
                        $Return    = explode($delimiters[0], $MakeReady);
                        return  $Return;
                    }
                    $split = multiexplode(array('-',','), $barber->opening_hours)
                @endphp
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label >Mulai</label>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Ex. Senin" value="{{ $split[0]}}" name="from_day" autocomplete="off">
                            <div class="input-group-append">
                                <div class="input-group-text" id="button-addon-date"><span class="fe fe-calendar fe-16"></span></div>
                            </div>
                        </div>
                        <i class="small text-danger d-none" id="errorFromDay"></i>
                    </div>
                    <div class="form-group col-md-4">
                        <label >Sampai</label>
                        <div class="input-group">
                            <input type="text" placeholder="Ex. Jumat" name="to_day" value="{{ $split[1]}}"  class="form-control" autocomplete="off">
                            <div class="input-group-append">
                                <div class="input-group-text" id="button-addon-date"><span class="fe fe-calendar fe-16"></span></div>
                            </div>
                        </div>
                        <i class="small text-danger d-none" id="errorToDay"></i>
                    </div>
                    <div class="form-group col-md-2">
                        <label >Mulai Jam</label>
                        <div class="input-group">
                            <input type="text" placeholder="Mulai Jam" name="from_hour" value="{{ $split[2]}}" class="form-control time-input" autocomplete="off" >
                            <div class="input-group-append">
                                <div class="input-group-text" id="button-addon-date"><span class="fe fe-clock fe-16"></span></div>
                            </div>
                        </div>
                        <i class="small text-danger d-none" id="errorFromHour"></i>
                    </div>
                    <div class="form-group col-md-2">
                        <label >Sampai Jam</label>
                        <div class="input-group">
                            <input type="text" placeholder="Sampai Jam" name="to_hour" value="{{ $split[3]}}" class="form-control time-input" autocomplete="off">
                            <div class="input-group-append">
                                <div class="input-group-text" id="button-addon-date"><span class="fe fe-clock fe-16"></span></div>
                            </div>
                        </div>
                        <i class="small text-danger d-none" id="errorToHour"></i>
                    </div>
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" class="form-control" value="{{ $barber->address }}" placeholder="Alamat" name="address" autocomplete="off">
                    <i class="small text-danger d-none" id="errorAddress"></i>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label >Latitude</label>
                        <input type="text" class="form-control" value="{{ $barber->lat }}" placeholder="Latitude" name="latitude" readonly>
                        <i class="small text-danger d-none" id="errorLat"></i>
                    </div>
                    <div class="form-group col-md-6">
                        <label >Longitude</label>
                        <input type="text" class="form-control" value="{{ $barber->long }}" placeholder="Longitude" name="longitude" readonly>
                        <i class="small text-danger d-none" id="errorLong"></i>
                    </div>
                </div>
                <div class="form-group">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.1564064729937!2d106.78931801431044!3d-6.243108362869339!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f11488bca27f%3A0x2dea983a0f2a47a8!2sHairnerds%20Studio!5e0!3m2!1sid!2sid!4v1608121541930!5m2!1sid!2sid" width="100%" height="90%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <hr class="my-4">
                <button type="submit" class="btn btn-primary button-submit" id="edit_profile" title="Save Changes">Save Change</button>
            </form>
    </div> <!-- /.card-body -->
    @endsection
