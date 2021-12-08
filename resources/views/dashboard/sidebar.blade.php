<div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Index") ? 'active' : ''  }}"  href="/index">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item " aria-current="page">
            <a class="nav-link {{ ($title === "Manage") ? 'active' : ''  }}" href="/manage">
              <span data-feather="file"></span>
              Manage
            </a>
          </li>
        </ul>
      </div>
    </nav>