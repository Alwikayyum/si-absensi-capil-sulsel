
  
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="/" class="logo d-flex align-items-center">
        <img src="assets/img/sulawesi-selatan.png" alt="">
        <span class="d-none d-lg-block">SIAB</span>
      </a>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
    
        <form class="container-fluid justify-content-start mt-3">
            <a href="/absensi">
              <button class="btn btn-sm btn-outline-primary" type="button">Absensi</button>
            </a>
            {{-- <button class="btn btn-sm btn-outline-secondary" type="button">Smaller button</button> --}}
        </form>

        <ul class="navbar-nav mr-4">
          @auth
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle nav-profile d-flex align-items-center pr-4" href="/profile" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="assets/img/dummy-man.png" alt="Profile" class="rounded-circle ">{{ auth()->user()->name }}  
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/profile"><i class="bi bi-layout-text-sidebar-reverse"></i> Profile</a></li>
                {{-- <li><a class="dropdown-item" href="#">Another action</a></li> --}}
                <li><hr class="dropdown-divider"></li>
                <li>
                  <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item">
                      <i class="bi bi-box-arrow-in-right"></i> Logout
                    </button>
                  </form>
                </li>
              </ul>
            </li>
          @else
            <li class="nav-item ms-auto">
              <a class="nav-link nav-profile d-flex align-items-center pr-4" href="/login" > 
                <img src="assets/img/dummy-man.png" alt="Profile" class="rounded-circle">
                <span class="d-none d-md-block ps-2">Login/Register </span>
              </a><!-- End Profile Iamge Icon -->  
            </li>
          @endauth
        </ul>


      </ul>
    </nav>

  </header>

