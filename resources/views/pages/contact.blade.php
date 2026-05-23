@extends('layouts.app')

@section('content')
<!-- Contact Section -->
<section id="contact" class="contact section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Kontak saya</h2>
        <p>Hubungi saya untuk kolaborasi atau peluang kerja</p>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row g-4 g-lg-5">
            <div class="col-lg-5">
                <div class="info-box">
                    <h3>Informasi Kontak</h3>
                    <p>Anda dapat menghubungi saya melalui informasi surel di bawah ini.</p>

                    <div class="info-item">
                        <div class="icon-box">
                            <i class="bi bi-geo-alt"></i>
                        </div>
                        <div class="content">
                            <h4>Lokasi</h4>
                            <p>{{ $contact_info['address'] }}</p>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="icon-box">
                            <i class="bi bi-telephone"></i>
                        </div>
                        <div class="content">
                            <h4>Telepon</h4>
                            <p>{{ $contact_info['phone'] }}</p>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="icon-box">
                            <i class="bi bi-envelope"></i>
                        </div>
                        <div class="content">
                            <h4>Email</h4>
                            <p>{{ $contact_info['email'] }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="contact-form">
                    <h3>Hubungi Saya</h3>
                    <p>Kirim pesan kepada saya dan saya akan merespons secepat mungkin.</p>

                    <form id="gmail-contact-form" method="post" class="contact-email-form">
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Nama Anda" required>
                            </div>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" placeholder="Email Anda" required>
                            </div>

                            <div class="col-12">
                                <input type="text" class="form-control" name="subject" placeholder="Subjek" required readonly>
                            </div>

                            <div class="col-12">
                                <textarea class="form-control" name="message" rows="6" placeholder="Pesan" required></textarea>
                            </div>

                            <div class="col-12 text-center">
                                <button type="submit" class="btn">Kirim Pesan</button>
                            </div>
                        </div>
                    </form>
                 <script>
                    document.addEventListener('DOMContentLoaded', function () {
                        const form = document.getElementById('gmail-contact-form');
                        if (!form) return;

                        const subjectInput = form.querySelector('input[name="subject"]');

                            if (subjectInput) {
                                subjectInput.value = 'nisrinasl25@gmail.com';
                            }

                        form.addEventListener('submit', function (event) {
                            event.preventDefault();

                            const formData = new FormData(form);

                            const to = 'nisrinasl25@gmail.com';

                            const subject = 'Pesan dari Portofolio - Nisrina';

                            const body = [
                                'Nama: ' + (formData.get('name') || ''),
                                'Email: ' + (formData.get('email') || ''),
                                '',
                                'Pesan:',
                                formData.get('message') || ''
                            ].join('\n');

                           const gmailUrl =
    'https://mail.google.com/mail/?view=cm&fs=1&tf=1'
    + '&to=' + to
    + '&su=' + encodeURIComponent(subject)
    + '&body=' + encodeURIComponent(body);

                            window.open(gmailUrl, '_blank');
                        });
                    });
                    </script>
                </div>
            </div>
        </div>

    </div>

</section><!-- /Contact Section -->
@endsection=