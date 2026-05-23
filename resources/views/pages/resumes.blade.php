@extends('layouts.app')

@section('content')
<!-- Resume Section -->
<section id="resume" class="resume section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Pendidikan, Pelatihan, dan Sertifikasi</h2>
        <p>Informasi tentang pendidikan, pelatihan, dan sertifikasi yang telah saya ikuti</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
            <!-- Left column with summary and contact -->
            <div class="col-lg-4">
                <div class="resume-side" data-aos="fade-right" data-aos-delay="100">
                    <div class="profile-img mb-4">
                        <img src="{{ asset('SnapFolio/assets/img/person/nisrina3.jpg') }}" alt="Profile" class="img-fluid rounded">
                    </div>

                    <h3>Ringkasan</h3>
                    <p>Seorang pengembang full-stack yang sedang belajar dan ingin berkembang dalam dunia teknologi informasi.</p>

                    <h3 class="mt-4">Kontak</h3>
                    <ul class="contact-info list-unstyled">
                        <li><i class="bi bi-geo-alt"></i> Bandung, Jawa Barat, Indonesia</li>
                        <li><i class="bi bi-envelope"></i> nisrinasl25@gmail.com</li>
                        <li><i class="bi bi-phone"></i> +62 838 6273 1325</li>
                        <li><i class="bi bi-linkedin"></i>
                        <a href="https://www.linkedin.com/in/nisrina-siti-luthfiyah-286923379?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank">linkedin.com/in/nisrina</a>
                        </li>
                    </ul>
                    <div class="mt-4">
                        <a href="https://drive.google.com/drive/folders/10kHgUK9MDmYfgR7dzgZDQex6yt_x_Y8m?usp=drive_link" target="_blank" class="btn btn-white-border">Lihat sertifikat</a>
                    </div>
                </div>
            </div>

            <!-- Right column with experience and education -->
            <div class="col-lg-8 ps-4 ps-lg-5">
                <!-- Experience Section -->
                <div class="resume-section" data-aos="fade-up">
                    <h3><i class="bi bi-briefcase me-2"></i>Pelatihan dan Sertifikasi</h3>

                    @foreach($experiences as $experience)
                    <div class="resume-item">
                        <h4>{{ $experience['position'] }}</h4>
                        <h5>{{ $experience['period'] }}</h5>
                        <p class="company"><i class="bi bi-building"></i> {{ $experience['company'] }}</p>
                        <ul>
                            @foreach($experience['responsibilities'] as $responsibility)
                            <li>{{ $responsibility }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endforeach
                </div>

                <!-- Education Section -->
                <div class="resume-section" data-aos="fade-up" data-aos-delay="100">
                    <h3><i class="bi bi-mortarboard me-2"></i>Pendidikan</h3>

                    @foreach($educations as $education)
                    <div class="resume-item">
                        <h4>{{ $education['degree'] }}</h4>
                        <h5>{{ $education['period'] }}</h5>
                        <p class="company"><i class="bi bi-building"></i> {{ $education['institution'] }}</p>
                        <p>{{ $education['description'] }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>

</section><!-- /Resume Section -->
@endsection