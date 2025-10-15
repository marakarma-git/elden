@extends('landing.layouts.main')


@section('content')

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div>
            <h1>Welcome to Our Landing Page</h1>
            <p>Explore our amazing services and features. Stay connected with us!</p>
        </div>
    </section>



      <!-- SECTION: Companies & People -->
  <section id="features" class="py-5 py-lg-6">
    <div class="container">
      <div class="text-center mb-4 mb-lg-5">
        <p class="text-secondary mb-2">Kami menghubungkan</p>
        <h1 class="display-title display-4 mb-2">Company and People</h1>
        <p class="lead text-secondary lead-narrow mx-auto">We've successfully helped these brands grow their business.</p>
      </div>

      <div class="row g-4 g-lg-5">
        <!-- Card 1 -->
        <div class="col-12 col-md-6 col-lg-4">
          <article class="card brand-card">
            <div class="brand-media ratio-4x3">
              <img src="https://images.unsplash.com/photo-1559339352-11d035aa65de?q=80&w=1600&auto=format&fit=crop" alt="Amanania – Food & Beverages">
              <span class="gradient"></span>
              <a class="brand-cta" href="#" aria-label="Lihat Amanania">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
              </a>
            </div>
            <div class="brand-body">
              <h3 class="brand-title">Amanaia</h3>
              <div class="brand-sub">Food &amp; Beverages</div>
            </div>
          </article>
        </div>

        <!-- Card 2 -->
        <div class="col-12 col-md-6 col-lg-4">
          <article class="card brand-card">
            <div class="brand-media ratio-4x3">
              <img src="https://images.unsplash.com/photo-1551882547-ff40c63fe5fa?q=80&w=1600&auto=format&fit=crop" alt="Marbella Place – Hotel & Travel">
              <span class="gradient"></span>
              <a class="brand-cta" href="#" aria-label="Lihat Marbella Place">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
              </a>
            </div>
            <div class="brand-body">
              <h3 class="brand-title">Marbella Place</h3>
              <div class="brand-sub">Hotel &amp; Travel</div>
            </div>
          </article>
        </div>

        <!-- Card 3 -->
        <div class="col-12 col-md-6 col-lg-4">
          <article class="card brand-card">
            <div class="brand-media ratio-4x3">
              <img src="https://images.unsplash.com/photo-1619767886558-efdc259cde1a?q=80&w=1600&auto=format&fit=crop" alt="Polytron – Technology">
              <span class="gradient"></span>
              <a class="brand-cta" href="#" aria-label="Lihat Polytron">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
              </a>
            </div>
            <div class="brand-body">
              <h3 class="brand-title">Polytron</h3>
              <div class="brand-sub">Technology</div>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>

    <!-- Features Section -->
    <section id="" class="py-5">
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
