<header id="header" class="header dark-background d-flex flex-column justify-content-center">
    <i class="header-toggle d-xl-none bi bi-list"></i>

    <div class="header-container d-flex flex-column align-items-start">
        <nav id="navmenu" class="navmenu">
            <ul>
                <li>
                    <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">
                        <i class="bi bi-house navicon"></i>Beranda
                    </a>
                </li>
                <li>
                    <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">
                        <i class="bi bi-person navicon"></i> Tentang Saya
                    </a>
                </li>
                <li>
                    <a href="{{ route('resumes') }}" class="{{ request()->routeIs('resumes') ? 'active' : '' }}">
                        <i class="bi bi-file-earmark-text navicon"></i> Pelatihan dan Sertifikasi
                    </a>
                </li>
                <li>
                    <a href="{{ route('portfolio') }}" class="{{ request()->routeIs('portfolio') ? 'active' : '' }}">
                        <i class="bi bi-images navicon"></i> Kumpulan Proyek
                    </a>
                </li>
                <li>
                    <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">
                        <i class="bi bi-envelope navicon"></i> Kontak saya
                    </a>
                </li>
            </ul>
        </nav>

       <div class="social-links text-center">
    <a href="https://www.linkedin.com/in/nisrina-siti-luthfiyah-286923379" class="linkedin">
        <i class="bi bi-linkedin"></i>
    </a>

    <a href="https://www.instagram.com/nis_stl/" class="instagram">
        <i class="bi bi-instagram"></i>
    </a>

    <a href="https://youtube.com/@rinnsaann" class="youtube">
        <i class="bi bi-youtube"></i>
    </a>

    <a href="https://github.com/rinn-13" class="github">
        <i class="bi bi-github"></i>
    </a>

    <a href="https://t.me/rinnchan_13" class="telegram">
        <i class="bi bi-telegram"></i>
    </a>
</div>
    </div>
</header>