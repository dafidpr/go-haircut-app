<section class="booking bg-section p-4">
    <div class="container mt-2">
        <div class="row">
            <div class="col-md-1 mr-5">
              <img src="{{ asset('assets/img/profile/' . $customer->picture) }}" width="110" class="barber-profile-img" style="border-radius: 50%;" alt="">
            </div>
            <div class="col-md-10 mt-3">
                <h3 class="font-weight-bold">{{ $customer->customer_name }}</h3>
                  <div class="row">
                      <div class="col-md-5 mb-2">
                          <small class="text-muted"> <i data-feather="mail" width="16px"></i> {{ $customer->email }} </small>
                      </div>
                 </div>
            </div>
        </div>
     </div>
 </section>