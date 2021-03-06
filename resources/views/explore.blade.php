 @extends('layouts.app')
 @section('content')
  <section class="form-search">
        <div class="bg-section p-5"></div>
        <div class="form-search-barber col-md-5 mx-auto">
            <div class="input-icon-addon">
                <i data-feather="search"></i>
            </div>
            <input type="text"class="search-input" id="search-input" placeholder="Cari Lokasi">
        </div>
        <div class="container mt-5">
            <h3 class="font-weight-bold text-center">Banyuwangi</h3>
            <p class="text-muted text-center">12 Barber ditemukan</p>
        </div>
</section>


<section class="result-section mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-1">
                <h4 class="font-weight-bold">Filter</h4>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <select class="nice-select wide">
                        <option value="Popular">Popular</option>
                        <option value="Terbaru">Terbaru</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <select class="nice-select wide">
                        <option value="Harga Terendah">Harga Terendah</option>
                        <option value="Harga Tertinggi">Harga Tertinggi</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-4 mt-3">
                <div class="card b-radius-10 p-2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{ asset('assets/img/barber/barbershop-2.jpg') }}" alt="" width="100" class="b-radius-10">
                            </div>
                            <div class="col-md-8 mt-2">
                                <a href="profile.html" class="text-decoration-none text-dark"><h5 class="ml-2 font-weight-bold">Hairnerds Studio</h5></a>
                                <small class="ml-2 font-weight-bold text-orange">78 Pelanggan</small><br>
                                <small class="text-muted ml-2"> <i data-feather="map-pin" width="16px"></i> Karangrejo, Banyuwangi</small>
                            </div>
                        </div>
                        <h5 class="font-weight-bold mt-4">Paket Basic</h5>
                        <div class="row">
                            <span class="badge badge-muted p-2 pl-1 pr-1 ml-2 mt-2"> <i data-feather="scissors" width="20"></i> Men's haircut</span>
                            <span class="badge badge-muted p-2 pl-1 pr-1 ml-2 mt-2"> <i data-feather="scissors" width="20"></i> Men's haircut</span>
                            <span class="badge badge-muted p-2 pl-1 pr-1 ml-2 mt-2"> <i data-feather="scissors" width="20"></i> Men's haircut</span>
                        </div>
                        <h5 class="font-weight-bold text-theme mt-4">Rp. 30.000</h5>
                        <div class="row mt-3">
                            <div class="col-md-6 mt-2">
                                <a href="booking.html" class="btn btn-color-theme btn-block p-2">Book Now</a>
                            </div>
                            <div class="col-md-6 mt-2">
                                <a href="" class="btn btn-outline-theme btn-block p-2">More Info</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-3">
                <div class="card b-radius-10 p-2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{ asset('assets/img/barber/barbershop-2.jpg') }}" alt="" width="100" class="b-radius-10">
                            </div>
                            <div class="col-md-8 mt-2">
                                 <a href="profile.html" class="text-decoration-none text-dark"><h5 class="ml-2 font-weight-bold">Hairnerds Studio</h5></a>
                                <small class="ml-2 font-weight-bold text-orange">78 Pelanggan</small><br>
                                <small class="text-muted ml-2"> <i data-feather="map-pin" width="16px"></i> Karangrejo, Banyuwangi</small>
                            </div>
                        </div>
                        <h5 class="font-weight-bold mt-4">Paket Basic</h5>
                        <div class="row">
                            <span class="badge badge-muted p-2 pl-1 pr-1 ml-2 mt-2"> <i data-feather="scissors" width="20"></i> Men's haircut</span>
                            <span class="badge badge-muted p-2 pl-1 pr-1 ml-2 mt-2"> <i data-feather="scissors" width="20"></i> Men's haircut</span>
                            <span class="badge badge-muted p-2 pl-1 pr-1 ml-2 mt-2"> <i data-feather="scissors" width="20"></i> Men's haircut</span>
                        </div>
                        <h5 class="font-weight-bold text-theme mt-4">Rp. 30.000</h5>
                        <div class="row mt-3">
                            <div class="col-md-6 mt-2">
                               <a href="booking.html" class="btn btn-color-theme btn-block p-2">Book Now</a>
                            </div>
                            <div class="col-md-6 mt-2">
                                <a href="" class="btn btn-outline-theme btn-block p-2">More Info</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-3">
                <div class="card b-radius-10 p-2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{ asset('assets/img/barber/barbershop-2.jpg') }}" alt="" width="100" class="b-radius-10">
                            </div>
                            <div class="col-md-8 mt-2">
                                 <a href="profile.html" class="text-decoration-none text-dark"><h5 class="ml-2 font-weight-bold">Hairnerds Studio</h5></a>
                                <small class="ml-2 font-weight-bold text-orange">78 Pelanggan</small><br>
                                <small class="text-muted ml-2"> <i data-feather="map-pin" width="16px"></i> Karangrejo, Banyuwangi</small>
                            </div>
                        </div>
                        <h5 class="font-weight-bold mt-4">Paket Basic</h5>
                        <div class="row">
                            <span class="badge badge-muted p-2 pl-1 pr-1 ml-2 mt-2"> <i data-feather="scissors" width="20"></i> Men's haircut</span>
                            <span class="badge badge-muted p-2 pl-1 pr-1 ml-2 mt-2"> <i data-feather="scissors" width="20"></i> Men's haircut</span>
                            <span class="badge badge-muted p-2 pl-1 pr-1 ml-2 mt-2"> <i data-feather="scissors" width="20"></i> Men's haircut</span>
                        </div>
                        <h5 class="font-weight-bold text-theme mt-4">Rp. 30.000</h5>
                        <div class="row mt-3">
                            <div class="col-md-6 mt-2">
                               <a href="booking.html" class="btn btn-color-theme btn-block p-2">Book Now</a>
                            </div>
                            <div class="col-md-6 mt-2">
                                <a href="" class="btn btn-outline-theme btn-block p-2">More Info</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-4 mt-3">
                <div class="card b-radius-10 p-2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{ asset('assets/img/barber/barbershop-2.jpg') }}" alt="" width="100" class="b-radius-10">
                            </div>
                            <div class="col-md-8 mt-2">
                                 <a href="profile.html" class="text-decoration-none text-dark"><h5 class="ml-2 font-weight-bold">Hairnerds Studio</h5></a>
                                <small class="ml-2 font-weight-bold text-orange">78 Pelanggan</small><br>
                                <small class="text-muted ml-2"> <i data-feather="map-pin" width="16px"></i> Karangrejo, Banyuwangi</small>
                            </div>
                        </div>
                        <h5 class="font-weight-bold mt-4">Paket Basic</h5>
                        <div class="row">
                            <span class="badge badge-muted p-2 pl-1 pr-1 ml-2 mt-2"> <i data-feather="scissors" width="20"></i> Men's haircut</span>
                            <span class="badge badge-muted p-2 pl-1 pr-1 ml-2 mt-2"> <i data-feather="scissors" width="20"></i> Men's haircut</span>
                            <span class="badge badge-muted p-2 pl-1 pr-1 ml-2 mt-2"> <i data-feather="scissors" width="20"></i> Men's haircut</span>
                        </div>
                        <h5 class="font-weight-bold text-theme mt-4">Rp. 30.000</h5>
                        <div class="row mt-3">
                            <div class="col-md-6 mt-2">
                               <a href="booking.html" class="btn btn-color-theme btn-block p-2">Book Now</a>
                            </div>
                            <div class="col-md-6 mt-2">
                                <a href="" class="btn btn-outline-theme btn-block p-2">More Info</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-3">
                <div class="card b-radius-10 p-2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{ asset('assets/img/barber/barbershop-2.jpg') }}" alt="" width="100" class="b-radius-10">
                            </div>
                            <div class="col-md-8 mt-2">
                                 <a href="profile.html" class="text-decoration-none text-dark"><h5 class="ml-2 font-weight-bold">Hairnerds Studio</h5></a>
                                <small class="ml-2 font-weight-bold text-orange">78 Pelanggan</small><br>
                                <small class="text-muted ml-2"> <i data-feather="map-pin" width="16px"></i> Karangrejo, Banyuwangi</small>
                            </div>
                        </div>
                        <h5 class="font-weight-bold mt-4">Paket Basic</h5>
                        <div class="row">
                            <span class="badge badge-muted p-2 pl-1 pr-1 ml-2 mt-2"> <i data-feather="scissors" width="20"></i> Men's haircut</span>
                            <span class="badge badge-muted p-2 pl-1 pr-1 ml-2 mt-2"> <i data-feather="scissors" width="20"></i> Men's haircut</span>
                            <span class="badge badge-muted p-2 pl-1 pr-1 ml-2 mt-2"> <i data-feather="scissors" width="20"></i> Men's haircut</span>
                        </div>
                        <h5 class="font-weight-bold text-theme mt-4">Rp. 30.000</h5>
                        <div class="row mt-3">
                            <div class="col-md-6 mt-2">
                               <a href="booking.html" class="btn btn-color-theme btn-block p-2">Book Now</a>
                            </div>
                            <div class="col-md-6 mt-2">
                                <a href="" class="btn btn-outline-theme btn-block p-2">More Info</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-3">
                <div class="card b-radius-10 p-2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{ asset('assets/img/barber/barbershop-2.jpg') }}" alt="" width="100" class="b-radius-10">
                            </div>
                            <div class="col-md-8 mt-2">
                                 <a href="profile.html" class="text-decoration-none text-dark"><h5 class="ml-2 font-weight-bold">Hairnerds Studio</h5></a>
                                <small class="ml-2 font-weight-bold text-orange">78 Pelanggan</small><br>
                                <small class="text-muted ml-2"> <i data-feather="map-pin" width="16px"></i> Karangrejo, Banyuwangi</small>
                            </div>
                        </div>
                        <h5 class="font-weight-bold mt-4">Paket Basic</h5>
                        <div class="row">
                            <span class="badge badge-muted p-2 pl-1 pr-1 ml-2 mt-2"> <i data-feather="scissors" width="20"></i> Men's haircut</span>
                            <span class="badge badge-muted p-2 pl-1 pr-1 ml-2 mt-2"> <i data-feather="scissors" width="20"></i> Men's haircut</span>
                            <span class="badge badge-muted p-2 pl-1 pr-1 ml-2 mt-2"> <i data-feather="scissors" width="20"></i> Men's haircut</span>
                        </div>
                        <h5 class="font-weight-bold text-theme mt-4">Rp. 30.000</h5>
                        <div class="row mt-3">
                            <div class="col-md-6 mt-2">
                               <a href="booking.html" class="btn btn-color-theme btn-block p-2">Book Now</a>
                            </div>
                            <div class="col-md-6 mt-2">
                                <a href="" class="btn btn-outline-theme btn-block p-2">More Info</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
     
@endsection
@section('js')
<script>
    var states = [
       'Cluring, Banyuwangi', 'Banyuwangi, Banyuwangi', 'Benculuk, Banyuwangi','Jajag, Banyuwangi', 'Simbar, Benculuk, Banyuwangi', 'Srono, Banyuwangi','Wonosobo, Banyuwangi', 'Pesanggaran, Banyuwangi','Purwoharjo, Banyuwangi', 'Tegaldlimo, Banyuwangi', 'Muncar, Banyuwangi', 'Gambiran, Banyuwangi','Genteng, Banyuwangi', 'Glenmore, Banyuwangi', 'Singojuruh, Banyuwangi', 'Rogojampi, Banyuwangi', 'Kabat, Banyuwangi', 'Giri, Banyuwangi', 'Wongsorejo, Banyuwangi', 'Songgon, Banyuwangi','Sempu, Banyuwangi', 'Kalipuro, Banyuwangi', 'Siliragung, Banyuwangi', 'Tegalsari, Banyuwangi', 'Licin, Banyuwangi', 'Blimbingsari, Banyuwangi' 
   ];
   $("#search-input").autocomplete({
       source:[states],
       itemStyle:{paddingBottom:'7px', paddingTop: '7px'},
       limit: 7
   });
</script>
@endsection
