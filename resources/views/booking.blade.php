   @extends('layouts.app')
   @section('content')
   <!-- Hero Section -->
   <section class="booking bg-section p-4">
       <div class="container mt-2">
           <h3 class="font-weight-bold">Paket Gold</h3>
            <h5 class="text-muted">Hairnerds Studio</h5>
        </div>
    </section>

    <section class="form-booking mt-4 p-4">
        <div class="container">
          <h3 class="font-weight-bold">Detail Order</h3>
          <form class="mt-5">
              <p>Siapa yang order ?</p>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Saya</label>
                    <div class="col-sm-5">
                        <label>
                            <input type="checkbox" class="js-switch" />
                        </label>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama <span class="text-danger">*</span></label>
                    <div class="col-sm-5">
                         <input type="text" class="form-control" placeholder="Nama Lengkap">
                        </div>
                    </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Email <span class="text-danger">*</span></label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" placeholder="Email">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Whatsapp</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" placeholder="Whatsapp">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Dewasa</label>
                    <div class="col-sm-5">
                        <select class="nice-select wide">
                            <option data-display="Jumlah Dewasa">Dewasa</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                          </select>
                        </div>
                    </div>
                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Anak</label>
                    <div class="col-sm-5">
                        <select class="nice-select wide">
                            <option data-display="Jumlah Anak">Anak</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Tanggal <span class="text-danger">*</span></label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control datepicker" placeholder="Tanggal">
                    </div>
                </div>
                <div class="form-group row mt-4">
                    <h5 class="font-weight-bold col-sm-2">Total</h5>
                    <div class="col-sm-5">
                        <h4 class="text-theme text-right">Rp. 30.000</h4>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-7">
                        <a href="success-order.html" class="btn btn-color-theme btn-block p-2">Booking</a>
                    </div>
                </div>
            </form>
        </div>
    </section>
    @endsection  
    