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
<section class="section">
  <div class="container">

    <div class="row gy-4">
      <div class="col-md-8 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="100">  
        
        <div class="col-12">
            <div class="card-header">
              <h3 class="card-title">Daftar Komik {{env('APP_NAME')}}</h3>
            </div>
            <div class="card-body">
              <div class="row">  
                @foreach($komik as $row)
                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-3 comic-card">
                  <div class="image-container my-2">
                    <img src="{{asset('assets/img/cover/').'/'.$row->cover_image}}" class="thumbs-img" alt="Cover">
                  </div>
                  <div class="image-title">
                      <a href="">
                        <h5 class="comic-title">{{$row->title}}</h5>
                      </a>
                  </div>
                  <div class="image-chapters">
                    @foreach($row->fetchLastTwoChapters() as $chapter)
                        <a href="">
                         <div class="image-chapters-item">
                          <span class="item-badge"> {{ $chapter->title }}</span> 
                          <span class="item-time"> {{ $chapter->formatted_created_at }}</span>
                        </div>
                        </a>
                    @endforeach
                  </div>
                </div>
                @endforeach
              </div>
            </div>
            <div class="card-footer d-flex justify-content-between">
                <div>
                  {{env('APP_NAME')}} - {{$title}}
                </div>
                <div class="d-flex justify-content-center">
                    {{ $komik->links('vendor.pagination.bootstrap-5') }}
                </div>
            </div>

        </div> 
      </div>
      <div class="col-md-4 col-sm-12 col-xs-12">
          <div class="">
              <h3>Terakhir Dibaca</h3>
          </div>
      </div>
    </div>

  </div>

</section><!-- /About Section -->

@endsection()