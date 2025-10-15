@extends('landing.layouts.main')


@section('content')


    <!-- Hero Section -->
    <section id="home" class="hero d-flex justify-content-center align-items-center">
        <div class="content">
          <h1 style="">Stop making <br> <span class="">Contents</span> <br> Start making <br><span class="">Connection</span></h1>
          <p>Using our growth formula, we turn creativity into conversions. Content & ad strategies designed for maximum ROAS.</p>
        </div>
    </section>


      {{-- <div class="hero d-flex justify-content-center align-items-center">
        <div class="content">
          <h1>Stop making <br> <span class="fw-bold">Contents</span> <br> Start making <span class="fw-bold">Connection</span></h1>
          <p>Using our growth formula, we turn creativity into conversions. Content & ad strategies designed for maximum ROAS.</p>
        </div>
      </div> --}}


    <!-- Features Section -->
    <section id="weconnect" class="container py-5">
      <div class="row align-items-end g-4 mb-4">
        <div class="col-lg-12">
          <h3 class="mb-0 pb-0 offset-1 display-6">We connect</h3>
          <h1 class="mt-0 display-1">Company and People</h1>
        </div>
      </div>

      <div class="text-center  mb-4">
        <div class="">
          <p class="muted mb-0">We’ve successfully helped diverse brands grow their business.</p>
        </div>
      </div>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">

      <!-- KARTU 1 -->
      <div class="col card-col">
        <article class="tile">
          <div class="img-shell">
            <div id="carA" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3500">
              <div class="carousel-inner">
                <!-- random Unsplash (food/restaurant). "sig" memastikan variasi -->
                <div class="carousel-item active">
                  <img src="{{asset('landing/img/foto/9.png')}}" alt="Amanaia 1">
                </div>
                <div class="carousel-item">
                  <img src="{{asset('landing/img/foto/2.png')}}" alt="Amanaia 2">
                </div>
                <div class="carousel-item">
                  <img src="{{asset('landing/img/foto/2.png')}}" alt="Amanaia 3">
                </div>
              </div>
            </div>
            <!-- tombol panah PNG -->
            <a href="#" class="arrow-btn" data-target="#carA" aria-label="Next Amanaia">
              <img src="{{asset('landing/img/icons/1.png')}}" class="img-fluid" style="height: 100px" alt="Next">
            </a>
          </div>
          <h3 class="tile-title">Amanaia</h3>
          <div class="tile-sub">Food and Beverages</div>
        </article>
      </div>

      <!-- KARTU 2 -->
      <div class="col card-col">
        <article class="tile">
          <div class="img-shell">
            <div id="carB" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3700">
              <div class="carousel-inner">
                <!-- random Unsplash (hotel/travel/building) -->
                <div class="carousel-item active">
                  <img src="https://source.unsplash.com/800x1000/?hotel,building&sig=21" alt="Marbella 1">
                </div>
                <div class="carousel-item">
                  <img src="https://source.unsplash.com/800x1000/?resort,palm&sig=22" alt="Marbella 2">
                </div>
                <div class="carousel-item">
                  <img src="https://source.unsplash.com/800x1000/?apartment,architecture&sig=23" alt="Marbella 3">
                </div>
              </div>
            </div>
            <a href="#" class="arrow-btn" data-target="#carB" aria-label="Next Marbella">
              <img src="arrow-right.png" alt="Next">
            </a>
          </div>
          <h3 class="tile-title">Marbella Place</h3>
          <div class="tile-sub">Hotel and Travel</div>
        </article>
      </div>

      <!-- KARTU 3 -->
      <div class="col card-col">
        <article class="tile">
          <div class="img-shell">
            <div id="carC" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3900">
              <div class="carousel-inner">
                <!-- random Unsplash (car/technology/ev) -->
                <div class="carousel-item active">
                  <img src="https://source.unsplash.com/800x1000/?car,technology&sig=31" alt="Polytron 1">
                </div>
                <div class="carousel-item">
                  <img src="https://source.unsplash.com/800x1000/?electric-car,ev&sig=32" alt="Polytron 2">
                </div>
                <div class="carousel-item">
                  <img src="https://source.unsplash.com/800x1000/?dashboard,auto&sig=33" alt="Polytron 3">
                </div>
              </div>
            </div>
            <a href="#" class="arrow-btn" data-target="#carC" aria-label="Next Polytron">
              <img src="arrow-right.png" alt="Next">
            </a>
          </div>
          <h3 class="tile-title">Polytron</h3>
          <div class="tile-sub">Technology</div>
        </article>
      </div>

    </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/150" class="card-img-top" alt="Feature 1">
                        <div class="card-body">
                            <h5 class="card-title">Feature 1</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/150" class="card-img-top" alt="Feature 2">
                        <div class="card-body">
                            <h5 class="card-title">Feature 2</h5>
                            <p class="card-text">Nullam feugiat purus et venenatis commodo.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/150" class="card-img-top" alt="Feature 3">
                        <div class="card-body">
                            <h5 class="card-title">Feature 3</h5>
                            <p class="card-text">Suspendisse potenti. Curabitur tincidunt felis eu lectus tempus.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-5 bg-light">
        <div class="container text-center">
            <h2>Contact Us</h2>
            <p>If you have any questions, feel free to reach out to us!</p>
        </div>
    </section>


@endsection
