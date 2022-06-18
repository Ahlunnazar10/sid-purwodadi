<header class="navbar navbar-dark sticky-top flex-md-nowrap p-0 shadow" style="background-color:#198754">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">SID Purwodadi</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <a class="w-100 text-decoration-none fs-6 text-end" href="#" style="color:#F2F2F2;font-style:italic"></a>
    <div class="navbar-nav ms-auto">
      <div class="nav-item text-nowrap">
        <form action="/logout" method="post">
          @csrf
          <button type="submit" class="btn nav-link p-2 text-white border-0" id="dropdown"><span data-feather="log-out"></span> Logout</button>
        </form>
      </div>
    </div>
  </header>