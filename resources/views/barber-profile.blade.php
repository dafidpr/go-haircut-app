@extends('layouts.app')
@section('content')
        <!-- Hero Section -->
        <section class="booking bg-section p-5">
            <div class="container mt-2">
                  <div class="row">
                      <div class="col-md-1 mr-5">
                        <img src="{{ asset('assets/img/barber/barbershop-1.jpg') }}" width="110" class="barber-profile-img" style="border-radius: 50%;" alt="">
                      </div>
                      <div class="col-md-10 mt-3">
                          <h3 class="font-weight-bold">Hairnerds Studio</h3>
                            <div class="row">
                                <div class="col-md-5 mb-2">
                                    <small class="text-muted"> <i data-feather="map-pin" width="16px"></i> Karangrejo, Banyuwangi | <b>372 Pelanggan</b> </small><br>
                                    <small class="text-muted"> <i data-feather="phone" width="16px"></i> 085673627368 </small>
                                </div>
                                <div class="col-md-7">
                                    <h6 class="text-muted">Jam Buka</h6>
                                    <small class="text-muted"> <i data-feather="calendar" width="16px"></i> Senin - Jumat, 09.00 - 21.00 </small>
                                </div>
                           </div>
                      </div>
                  </div>
                  <div class="container">
                      <div class="row mt-4">
                        <a href="" class="btn btn-color-theme mr-3"><i data-feather="message-square" width="16px"></i> Chat Barber </a>
                        <a href="" class="btn btn-outline-theme"><i data-feather="map-pin" width="16px"></i> Lihat Lokasi </a>
                    </div>
                </div>
            </div>
       </section>
  
        <!-- Service Section -->
        <section class="service-section mt-5">
          <div class="container">
              <div class="row">
                  <div class="col-md-3">
                      <h4 class="font-weight-bold">Semua Service</h4>
                    </div>
                    <div class="col-md-1 ml-auto mr-3 mt-2">
                      <h4 class="font-weight-bold">Urutkan</h4>
                  </div>
                  <div class="col-md-2">
                      <div class="form-group">
                        <select class="nice-select wide">
                            <option value="Popular">Popular</option>
                            <option value="Terbaru">Terbaru</option>
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
                                      <img src="https://images.unsplash.com/photo-1559453252-1634e4c59f20?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="" width="100" class="b-radius-10">
                                  </div>
                                  <div class="col-md-8 mt-2">
                                      <h5 class="ml-2 font-weight-bold">Paket Silver</h5>
                                      <small class="ml-2 font-weight-bold text-orange">78 Pelanggan</small><br>
                                      <small class="text-muted ml-2"> <i data-feather="map-pin" width="16px"></i> Karangrejo, Banyuwangi</small>
                                  </div>
                              </div>
                              <h5 class="font-weight-bold mt-4">Service</h5>
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
                                      <img src="https://images.unsplash.com/photo-1559453252-1634e4c59f20?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="" width="100" class="b-radius-10">
                                  </div>
                                  <div class="col-md-8 mt-2">
                                      <h5 class="ml-2 font-weight-bold">Paket Silver</h5>
                                      <small class="ml-2 font-weight-bold text-orange">78 Pelanggan</small><br>
                                      <small class="text-muted ml-2"> <i data-feather="map-pin" width="16px"></i> Karangrejo, Banyuwangi</small>
                                  </div>
                              </div>
                              <h5 class="font-weight-bold mt-4">Service</h5>
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
                                      <img src="https://images.unsplash.com/photo-1559453252-1634e4c59f20?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="" width="100" class="b-radius-10">
                                  </div>
                                  <div class="col-md-8 mt-2">
                                      <h5 class="ml-2 font-weight-bold">Paket Silver</h5>
                                      <small class="ml-2 font-weight-bold text-orange">78 Pelanggan</small><br>
                                      <small class="text-muted ml-2"> <i data-feather="map-pin" width="16px"></i> Karangrejo, Banyuwangi</small>
                                  </div>
                              </div>
                              <h5 class="font-weight-bold mt-4">Service</h5>
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