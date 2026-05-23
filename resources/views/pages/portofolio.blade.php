@extends('layouts.app')

@section('content')
<!-- Portfolio Section -->
<section id="portfolio" class="portfolio section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Kumpulan Proyek</h2>
        <p>Beberapa proyek yang menunjukkan kemampuan dan pengalaman saya</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

            <div class="row">
                <div class="col-lg-12">
                    <div class="row gy-4 portfolio-container isotope-container" data-aos="fade-up" data-aos-delay="200">
                        @foreach($projects as $project)
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item">
                            <div class="portfolio-wrap {{ $project['image'] == 'quizpoint.jpg' ? 'no-overlay' : '' }} {{ $project['image'] == 'logoanime.jpg' ? 'landscape-project' : '' }}">
                                <img src="{{ asset('SnapFolio/assets/img/portfolio/' . $project['image']) }}" class="img-fluid {{ $project['image'] == 'logoanime.jpg' ? 'landscape-img' : '' }}" alt="{{ $project['title'] }}" loading="lazy">
                                <div class="portfolio-info">
                                    <div class="content">
                                        <span class="category">{{ $project['category'] }}</span>
                                        <h4>{{ $project['title'] }}</h4>
                                        <div class="portfolio-links">
                                            <a href="{{ asset('SnapFolio/assets/img/portfolio/' . $project['image']) }}" class="glightbox" title="{{ $project['title'] }}">
                                                <i class="bi bi-plus-lg"></i>
                                            </a>
                                            <a href="{{ $project['link'] }}" target="_blank" rel="noopener" title="More Details">
                                                <i class="bi bi-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->
                        @endforeach
                    </div>
                </div>
            </div>

        </div>

    </div>

</section><!-- /Portfolio Section -->
@endsection