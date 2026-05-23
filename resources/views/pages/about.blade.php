@extends('layouts.app')

@section('content')
<!-- About Section -->
<section id="about" class="about section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">
            <div class="col-lg-5" data-aos="zoom-in" data-aos-delay="200">
                <div class="profile-card">
                    <div class="profile-header">
                        <div class="profile-image">
                            <img src="{{ asset('SnapFolio/assets/img/person/nisrina2.jpg') }}" alt="Profile Image" class="img-fluid">
                        </div>
                        <div class="profile-badge">
                            <i class="bi bi-check-circle-fill"></i>
                        </div>
                    </div>

                    <div class="profile-content">
                        <h3>{{ $profile['name'] }}</h3>
                        <p class="profession">{{ $profile['profession'] }}</p>

                        <div class="contact-links">
                            <a href="mailto:{{ $profile['email'] }}" class="contact-item">
                                <i class="bi bi-envelope"></i>
                                {{ $profile['email'] }}
                            </a>
                            <a href="tel:{{ $profile['phone'] }}" class="contact-item">
                                <i class="bi bi-telephone"></i>
                                {{ $profile['phone'] }}
                            </a>
                            <a href="#" class="contact-item">
                                <i class="bi bi-geo-alt"></i>
                                {{ $profile['location'] }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-7" data-aos="fade-left" data-aos-delay="300">
                <div class="about-content">
                    <div class="section-header">
                        <span class="badge-text">Tentang Saya</span>
                        <h2>Memiliki minat dalam menciptakan pengalaman digital</h2>
                    </div>

                    <div class="description">
                        <p>Siswi RPL yang memiliki dasar dalam Fullstack Web Development. Memahami pengembangan backend menggunakan PHP (Laravel) serta pengembangan frontend dengan Vue.js, JavaScript, dan Bootstrap. Terbiasa mengelola database MySQL serta membuat prototipe desain dasar menggunakan Figma. Memiliki kemampuan beradaptasi yang baik terhadap teknologi baru dan memiliki motivasi untuk terus belajar serta mengembangkan kemampuan teknis melalui berbagai proyek digital. </p>
                        <p>Web development menggunakan Laravel (PHP), Vue.js, JavaScript, Bootstrap, dan MySQL. Memiliki dasar Python serta kemampuan dasar desain UI menggunakan Figma.</p>
                    </div>

                    <div class="stats-grid">
                        @foreach($stats as $stat)
                        <div class="stat-item">
                            <div class="stat-number">{{ $stat['number'] }}</div>
                            <div class="stat-label">{{ $stat['label'] }}</div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </div>

</section><!-- /About Section -->
@endsection