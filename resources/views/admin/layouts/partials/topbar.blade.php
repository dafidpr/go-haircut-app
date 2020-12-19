<nav class="topnav navbar navbar-light bg-white">
    <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
      <i class="fe fe-menu navbar-toggler-icon"></i>
    </button>
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link text-muted my-2" href="#" id="modeSwitcher" data-mode="light">
            <i class="fe fe-sun fe-16"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-muted my-2" href="./#" data-toggle="modal" data-target=".modal-shortcut">
            <span class="fe fe-grid fe-16"></span>
            </a>
        </li>
        <li class="nav-item nav-notif">
            <a class="nav-link text-muted my-2" href="./#" data-toggle="modal" data-target=".modal-notif">
            <span class="fe fe-bell fe-16"></span>
            <span class="dot dot-md bg-success"></span>
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-muted pr-0" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="avatar avatar-sm mt-2">
                @if (session('user')!= null)
                    
                    <img src="{{ asset('admin/assets/assets/avatars').'/'.$user->picture }}" alt="..." class="avatar-img rounded-circle">
                @else
                    <img src="{{ asset('assets/img/barber/barber_profile').'/'.$barber->profile_pic }}" alt="..." class="avatar-img rounded-circle">

                @endif
            </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right tx-13">
                @if (session('user')['id'] != null)
                    <div class="container pt-2 ml-2">
                        <h6>{{ $user->full_name }}</h6>
                        <p class="text-muted">{{ $user->email }}</p>
                    </div>
                    <a href="/administrator/edit_profile" class="dropdown-item"><i class="fe fe-16 fe-edit-3"></i> Edit Profile</a>
                    <a href="/administrator/update_password" class="dropdown-item"><i class="fe fe-16 fe-lock"></i> Update Password</a>
                    <a href="administrator/settings" class="dropdown-item"><i class="fe fe-16 fe-settings"></i> Settings</a>
                    @else
                    <div class="container pt-2 ml-2">
                        <h6>{{ $barber->owner_name }}</h6>
                        <p class="text-muted">{{ $barber->email }}</p>
                    </div>
                    <a href="/barber/edit_profile" class="dropdown-item"><i class="fe fe-16 fe-edit-3"></i> Edit Profile</a>
                    <a href="/barber/update_password" class="dropdown-item"><i class="fe fe-16 fe-lock"></i> Update Password</a>
                    @endif
                
                <div class="dropdown-divider"></div>
                @if (session('user')['id'] != null)
                    <a href="/auth/logout" class="dropdown-item"><i class="fe fe-log-out fe-16"></i> Sign Out</a>
                @else
                    <a href="/member/logout" class="dropdown-item"><i class="fe fe-log-out fe-16"></i> Sign Out</a>
                @endif
            </div>
        </li>
    </ul>
  </nav>