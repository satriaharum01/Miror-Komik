@extends('layouts.front')

@section('content')
<!-- Hero Section -->
<section id="hero" class="hero section light-background py-0">

  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{asset('assets/img/hero/hero_1.jpg')}}" class="hero py-0" alt="">
          <div class="bottom-0 d-flex flex-column h-100 justify-content-end overlay-content pb-5 position-absolute px-5 text-center top-0 w-100">
            <div class="bg-black bg-opacity-50 col-lg-5 d-flex flex-column justify-content-center order-2 order-lg-1 px-3 py-2">
              <h2 class="text-white" data-aos="fade-up">Seoul Station Druid</h2>
              <p class="text-white text-start" data-aos="fade-up" data-aos-delay="100">We are team of talented designers making websites with
                Bootstrap</p>
              <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                <a href="#book-a-table" class="btn-get-started">Baca Komik</a>
              </div>
            </div>
          </div>
        </div>
        
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

</section><!-- /Hero Section -->

<!-- About Section -->
<section id="about" class="about section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>About Us<br></h2>
    <p><span>Learn More</span> <span class="description-title">About Us</span></p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row gy-4">
      <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
        <img src="assets/img/about.jpg" class="img-fluid mb-4" alt="">
        <div class="book-a-table">
          <h3>Book a Table</h3>
          <p>+1 5589 55488 55</p>
        </div>
      </div>
      <div class="col-lg-5" data-aos="fade-up" data-aos-delay="250">
        <div class="content ps-0 ps-lg-5">
          <p class="fst-italic">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore
            magna aliqua.
          </p>
          <ul>
            <li><i class="bi bi-check-circle-fill"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo
                consequat.</span></li>
            <li><i class="bi bi-check-circle-fill"></i> <span>Duis aute irure dolor in reprehenderit in voluptate
                velit.</span></li>
            <li><i class="bi bi-check-circle-fill"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.
                Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat
                nulla pariatur.</span></li>
          </ul>
          <p>
            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
          </p>

          <div class="position-relative mt-4">
            <img src="assets/img/about-2.jpg" class="img-fluid" alt="">
            <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a>
          </div>
        </div>
      </div>
    </div>

  </div>

</section><!-- /About Section -->

@endsection()