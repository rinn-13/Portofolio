@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section id="hero" class="hero section">

    <div class="background-elements">
        <div class="bg-circle circle-1"></div>
        <div class="bg-circle circle-2"></div>
    </div>

    <div class="hero-content">

        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                    <div class="hero-text">
                        <h1><span class="accent-text">Portofolio</span></h1>
                        <h2>{{ $hero['name'] }}</h2>
                        <p class="lead">{{ $hero['tagline'] }} <span class="typed" data-typed-items="{{ implode(',', $hero['typed_items']) }}"></span></p>
                        <p class="description">{{ $hero['description'] }}</p>

                        <div class="hero-actions">
                            <a href="{{ route('portfolio') }}" class="btn btn-primary">Lihat Pekerjaan Saya</a>
                            <a href="{{ route('contact') }}" class="btn btn-outline">Hubungi Saya</a>
                        </div>

                        <div class="social-links">
                            @foreach($social_links as $link)
                                <a href="{{ $link['url'] }}"><i class="{{ $link['icon'] }}"></i></a>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
                    <div class="hero-visual">
                        <div class="profile-container">
                            <div class="profile-background"></div>
                            <img src="{{ asset('SnapFolio/assets/img/person/nisrina1.jpg') }}" alt="{{ $hero['name'] }}" class="profile-image">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</section><!-- /Hero Section -->
@endsection