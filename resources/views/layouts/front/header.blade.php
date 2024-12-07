
<header id="header" class="header d-flex align-items-center sticky-top">
  <div class="container position-relative d-flex align-items-center justify-content-between">

    <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
      <!-- Uncomment the line below if you also wish to use an image logo -->
      <!-- <img src="assets/img/logo.png" alt=""> -->
      <h1 class="sitename">{{env('APP_NAME')}}</h1>
      <span>.site</span>
    </a>
    @include('layouts.front.nav')
    <div class="row">
      <div class="col-8">
          <input
              type="text"
              class="form-control"
              placeholder="Cari Judul..."
              aria-label="Search"
          />
      </div>
      <div class="col-4">
          <button class="btn btn-primary" type="button"><i class="bi bi-search"></i></button>
      </div>
    </div>
      
  </div>
</header>