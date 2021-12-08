<header class="navbar navbar-light sticky-top bg-primary flex-md-nowrap p-0">
    <a class="navbar-brand logo col-md-3 col-lg-2 me-0 px-3 d-flex align-items-center text-light" href="/index">
      <img src="assets/img/sulawesi-selatan.png" alt="">
      SI ANIEK
    </a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-primary w-100" type="text" placeholder="Search" aria-label="Search">
    <div class="navbar-nav ">
      <div class="nav-item text-nowrap">
        {{-- <a class="nav-link px-3" href="#">Logout</a> --}}
        <form action="/logout" method="post">
            @csrf
            <button class="nav-link px-3 bg-primary text-light border-0 my-2" type="submit"><i class="bi bi-box-arrow-in-right"></i>Logout</button>
        </form>
      </div>
    </div>
  </header>