  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="{{ route('home') }}" class="logo d-flex align-items-center">
        <img src="/assets/img/logo.png" alt="logo">
        <span class="d-none d-lg-block">MiFerre</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto" style="margin-right: 12px;">
      <ul class="d-flex align-items-center">

        {{-- <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li> --}}


        <li class="nav-item dropdown pe-3">
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            {{-- <span class="d-md-block dropdown-toggle ps-2">{{ auth()->user()->name }}</span> --}}
            <span class="d-md-block dropdown-toggle ps-2">Duilio Dev</span>
          </a>

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Duilio Dev</h6>
              <span>Duilio.dev@gmail.com</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="bi bi-box-arrow-right"></i>
                <span>Salir</span>
              </a>
              <form action="{{ route('logout') }}" method="POST" id="logout-form" style="display: none">
                @csrf
            </form>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->