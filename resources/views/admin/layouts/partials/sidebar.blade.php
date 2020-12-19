
      <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
            <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
                <i class="fe fe-x"><span class="sr-only"></span></i>
            </a>
            <nav class="vertnav navbar navbar-light">
                <!-- nav bar -->
                <div class="w-100 mb-4 d-flex">
                    <a class="navbar-brand mx-auto mt-2 mb-4 flex-fill text-center" href="./index.html">
                        <img src="{{ asset('assets/img/logo.png') }}" width="130" alt="">
                    </a>
                </div>
                @if (session('user')['id'] != null)
                <ul class="navbar-nav flex-fill w-100 mb-2">
                    <li class="nav-item w-100">
                        <a class="nav-link" href="/administrator">
                            <i class="fe fe-home fe-16"></i>
                            <span class="ml-3 item-text">Dashboard</span>
                        </a>
                    </li>
                </ul>
                @else
                <ul class="navbar-nav flex-fill w-100 mb-2">
                    <li class="nav-item w-100">
                        <a class="nav-link" href="/barber">
                            <i class="fe fe-home fe-16"></i>
                            <span class="ml-3 item-text">Dashboard</span>
                        </a>
                    </li>
                </ul>
                    <p class="text-muted nav-heading mt-4 mb-1">
                        <span>Components</span>
                    </p>
                        <ul class="navbar-nav flex-fill w-100 mb-2">
                            <li class="nav-item w-100">
                                <a class="nav-link" href="widgets.html">
                                    <i class="fe fe-shopping-cart fe-16"></i>
                                    <span class="ml-3 item-text">Transaksi</span>
                                </a>
                            </li>
                            <li class="nav-item w-100">
                                <a class="nav-link" href="widgets.html">
                                    <i class="fe fe-shopping-bag fe-16"></i>
                                    <span class="ml-3 item-text">Kas Pendapatan</span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#ui-elements" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                                    <i class="fe fe-box fe-16"></i>
                                    <span class="ml-3 item-text">Master Data</span>
                                </a>
                                <ul class="collapse list-unstyled pl-4 w-100" id="ui-elements">
                                    <li class="nav-item">
                                        <a class="nav-link pl-3" href="./ui-color.html"><span class="ml-1 item-text">Colors</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#forms" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                                    <i class="fe fe-credit-card fe-16"></i>
                                    <span class="ml-3 item-text">Laporan</span>
                                </a>
                                <ul class="collapse list-unstyled pl-4 w-100" id="forms">
                                    <li class="nav-item">
                                        <a class="nav-link pl-3" href="./form_elements.html"><span class="ml-1 item-text">Basic Elements</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link pl-3" href="./form_advanced.html"><span class="ml-1 item-text">Advanced Elements</span></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                @endif           
            </nav>
        </aside>