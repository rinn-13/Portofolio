<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $data = [
            'title' => 'Home - Portofolio',
            'pageTitle' => 'Home',
            'active' => 'home',
            'hero' => [
                'name' => 'Nisrina Siti Luthfiyah',
                'tagline' => "I'm a",
                'typed_items' => ['Beginner Fullstack Developer'],
                'description' => 'Pemula dalam pengembangan perangkat lunak, terutama di bidang web development.'
            ],
            'social_links' => [
                ['icon' => 'bi bi-whatsapp', 'url' => 'https://wa.me/6283862731325'],
                ['icon' => 'bi bi-telegram', 'url' => 'https://t.me/rinn_13'],
                ['icon' => 'bi bi-github', 'url' => 'https://github.com/rinn-13'],
                ['icon' => 'bi bi-linkedin', 'url' => 'https://www.linkedin.com/in/nisrina-siti-luthfiyah-286923379?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app'],
                ['icon' => 'bi bi-instagram', 'url' => 'https://www.instagram.com/nis_stl/'],
                ['icon' => 'bi bi-youtube', 'url' => 'https://youtube.com/@rinnsaann?si=GQSO_0TKzdYtKLpv']
            ]
        ];

        return view('pages.home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About - Portofolio',
            'pageTitle' => 'About',
            'active' => 'about',
            'profile' => [
                'name' => 'Nisrina Siti Luthfiyah',
                'profession' => 'Beginner Fullstack Developer',
                'email' => 'nisrinasl25@gmail.com',
                'phone' => '+62 838 6273 1325',
                'location' => 'Kota Bandung, Jawa Barat, Indonesia'
            ],
            'stats' => [
                ['number' => '10+', 'label' => 'Mini Proyek'],
                ['number' => '2.5+', 'label' => 'Pengalaman dalam dunia IT (tahun)'],
                ['number' => '3', 'label' => 'Sertifikasi yang diperoleh']
            ]
        ];

        return view('pages.about', $data);
    }

    public function resumes()
    {
        $resumeData = [
            'title' => 'Pendidikan, Pelatihan, dan Sertifikasi - Portofolio',
            'pageTitle' => 'resumes',
            'active' => 'resumes',
            'experiences' => [
                [
                    'position' => 'AI and Machine Learning',
                    'period' => '2025',
                    'company' => 'Code.org',
                    'responsibilities' => [
                        'Menyelesaikan program pelatihan global mengenai konsep dasar Kecerdasan Buatan (AI), ilmu komputer, dan Machine Learning.'
                    ]
                ],
                [
                    'position' => 'Live Event: Grand Launching KID 2025 ',
                    'period' => '2025',
                    'company' => 'Telkom Corporate University',
                    'responsibilities' => [
                        'Berpartisipasi aktif dalam kegiatan resmi Telkom CorpU terkait peluncuran inovasi digital dan pengembangan kompetensi masa depan'
                    ]
                ],
                 [
                    'position' => 'Guinness World Records Certificate of Participation – The Most Apps Made in Onsite Generative-AI Event ',
                    'period' => '2025',
                    'company' => 'Amazon Web Services bekerja sama dengan Prestasi Junior Indonesia',
                    'responsibilities' => [
                        'Sertifikat ini diberikan sebagai bukti partisipasi dalam kegiatan pemecahan rekor dunia Guinness World Records terkait pembuatan aplikasi berbasis generative AI secara onsite di Karawang, Jawa Barat pada 15 Oktober 2025.'
                    ]
                ]
            ],
            'educations' => [
                [
                    'degree' => 'Siswi SMKN 11 Bandung',
                    'period' => '2024 - Present',
                    'institution' => 'SMKN 11 BANDUNG - Jurusan Rekayasa Perangkat Lunak (RPL)',
                    'description' => 'Siswi RPL aktif dari jurusan Rekayasa Perangkat Lunak. Memiliki minat yang kuat dalam pengembangan perangkat lunak, terutama dalam bidang web development. Selama masa sekolah, saya telah mengikuti beberapa pelatihan dan sertifikasi terkait teknologi informasi serta mengembangkan website yang menantang.'
                ]
            ]
        ];

        return view('pages.resumes', $resumeData);
    }

    public function portfolio()
    {
        $data = [
            'title' => 'Portfolio - Portofolio',
            'pageTitle' => 'Kumpulan Proyek',
            'active' => 'portfolio',
            'projects' => [
                [
                    'title' => 'Website Mini Quiz (QuizPoint) | 2025',
                    'category' => 'Web Development',
                    'image' => 'quizpoint1.png',
                    'link' => 'https://github.com/rinn-13/MiniProject-QuizPoint',
                    'description' => 'Website ini memiliki fitur seperti alur soal kuis, sistem penilaian otomatis, serta interaksi pengguna dengan tampilan yang sederhana dan mudah digunakan. Website dibuat atas kolaborasi dua siswa.'
                ],
                [
                    'title' => 'Website Berita Hiburan (AnimeNews) | 2025',
                    'category' => 'Web Development',
                    'image' => 'logoanime1.png',
                    'link' => 'https://github.com/rinn-13/News-AnimeNews',
                    'description' => 'Website ini memiliki fitur lengkap seperti kategori berita, pencarian artikel, trending news, dan upload gambar. Tersedia juga dashboard admin untuk melakukan manajemen data dan pembuatan laporan, serta tampilan responsif yang nyaman digunakan di desktop maupun smartphone. Website dibuat atas kolaborasi dua siswa.'
                ],
                [
                    'title' => 'Website TemanPreneur (Marketplace siswa)|  2025 - Sekarang',
                    'category' => 'Web Development',
                    'image' => 'temanpreneurlogo.png',
                    'link' => 'https://github.com/rinn-13/TemanPreneur',
                    'description' => 'Website ini memiliki fitur lengkap seperti login multi-role (buyer, seller, admin), katalog produk, keranjang belanja, checkout, pelacakan pesanan, review produk, notifikasi, dashboard penjualan, hingga sistem pengaduan. Namun website ini masih dalam tahap pengembangan. '
                ]
            ]
        ];

        return view('pages.portofolio', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact - SnapFolio',
            'pageTitle' => 'Contact',
            'active' => 'contact',
            'contact_info' => [
                'address' => 'Bandung, Indonesia',
                'phone' => '+62 838 6273 1325',
                'email' => 'nisrinasl25@gmail.com'
            ]
        ];

        return view('pages.contact', $data);
    }
}