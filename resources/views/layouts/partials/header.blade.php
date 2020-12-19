<section class="header">
    <nav class="navbar navbar-expand-lg navbar-light p-4">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('assets/img/logo.png') }}" width="150" alt="">
            </a>
            @if (session('member'))
              <div class="dropdown dropdown-mobile">
                <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
                    <div class="d-flex">
                        <span class="avatar" style="background-image: url('{{ asset('assets/img/profile').'/'.$customer->picture }}')"></span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                    <a class="dropdown-item" href="/customer/edit_profile">
                        <i class="dropdown-icon" data-feather="edit"></i> Edit Profile
                    </a>
                    <a class="dropdown-item" href="/customer/riwayat">
                        <i class="dropdown-icon" data-feather="check-circle"></i> Riwayat
                    </a>
                    <a class="dropdown-item" href="/customer/update_password">
                        <i class="dropdown-icon" data-feather="lock"></i> Update Password
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/member/logout">
                        <i class="dropdown-icon" data-feather="log-out"></i> Sign out
                    </a>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <div class="dropdown">
                            <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
                                <div class="d-flex">
                                    <span class="avatar" style="background-image: url('{{ asset('assets/img/profile').'/'.$customer->picture  }}')"></span>
                                    <span class="ml-2 d-none d-lg-block">
                                        <span>{{ $customer->customer_name }}</span>
                                        <small class="text-muted d-block">{{ $customer->email }}</small>
                                    </span>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                <a class="dropdown-item" href="/customer/edit_profile">
                                    <i class="dropdown-icon" data-feather="edit"></i> Edit Profile
                                </a>
                                <a class="dropdown-item" href="/customer/riwayat">
                                    <i class="dropdown-icon" data-feather="check-circle"></i> Riwayat
                                </a>
                                <a class="dropdown-item" href="/customer/update_password">
                                    <i class="dropdown-icon" data-feather="lock"></i> Update Password
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/member/logout">
                                    <i class="dropdown-icon" data-feather="log-out"></i> Sign out
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            @else
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link btn btn-color-theme text-white pl-3 pr-3" href="/member/login">Masuk</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link btn btn-outline-theme pl-3 pr-3" href="/member/register">Daftar</a>
                </li>
              </ul>
            </div>
        </div>
        @endif
      </nav>
  </section>