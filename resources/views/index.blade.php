@extends('layouts.app')
@section('content')
<section class="hero container">
    <div class="mt-5">
        <div class="row">
            <div class="col-md-5">
                <h1 class="font-weight-bold">#Ganteng <br> Maksimal</h1>
                <p class="text-muted mt-3">Temukan berbagai barber profesional yang siap mengubah gayamu menjadi lebih keren dan tentunya  <strong>#GantengMaksimal</strong></p>
                <a href="/explore" class="btn color-theme pr-4 pl-4 pt-2 pb-2 text-white mt-3">Explore Now</a>
                <a href="/member/register-member" class="btn  btn-outline-theme  pr-4 pl-4 pt-2 pb-2 text-theme mt-3">Become a member</a>
            </div>
            <div class="col-md-7">
                <img src="{{ asset('assets/img/ilustration/barber.svg') }}" width="650" alt="">
            </div>
        </div>
    </div>
  </section>

  <!-- Section Poplars Barber -->
  <section class="popular-barber bg-section mt-5">
        <div class="container">
            <div class="row">
                <h3 class="font-weight-bold ml-3"> Popular <span class="text-theme"> Barber's</span> </h3>
                <div class="ml-auto">
                  <a href="" class="text-theme text-decoration-none">Lihat semua <i data-feather="chevron-right"></i> </a>
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

  <!-- About Section -->
  <section class="about mt-5 pt-5">
      <div class="container">
          <div class="row">
              <div class="col-md-6">
                <img src="{{ asset('assets/img/ilustration/cart.svg') }}" width="480" alt="">
              </div>
              <div class="col-md-6">
                  <h2 class="font-weight-bold">Buat Penampilanmu jadi lebih
                  <span class="text-theme">#Ganteng</span>  Dengan Kami</h2>
                  <p class="text-muted mt-3">Temukan barber disekitarmu dengan mudah dengan aplikasi kami. Kami membantu anda dalam mencari barber dengan layanan terbaik dan harga ekonomis sesuai isi dompet anda. Sudah banyak yang bergabung dengan kami, Ayo tunggu apa lagi! </p>
                  <div class="row mt-5">
                      <div class="col-md-6">
                        <h3 class="text-theme font-weight-bold">300</h3>
                        <h4 class="font-weight-bold">Barbershop</h4>
                        <p class="text-muted">Ratusan barbershop yang siap untuk melayani anda. </p>
                      </div>
                      <div class="col-md-6">
                        <h3 class="text-theme font-weight-bold">1.023</h3>
                        <h4 class="font-weight-bold">Pelanggan</h4>
                        <p class="text-muted">Sudah ribuan pelanggan yang menggunakan layanan kami. </p>
                      </div>
                  </div>
              </div>
          </div>


        <div class="row mt-5">
            <div class="col-md-6 mt-5">
                <h1 class="font-weight-bold mt-5">Sudah siap tampil 
                <span class="text-theme">#Ganteng ?</span> </h1>
                <p class="text-muted mt-3">Cari barber terbaik di sekitarmu dan jadikan penampilanmu ganteng maksimal.Tunggu apa lagi, jelajahi bersama kami!</p>
                <a href="/explore" class="btn color-theme pr-4 pl-4 pt-2 pb-2 text-white mt-3">Explore Now</a>
            </div>
              <div class="col-md-6 mt-5">
                  <img src="{{ asset('assets/img/ilustration/explore.svg') }}" width="480" alt="">
              </div>
          </div>
      </div>
  </section>
@endsection