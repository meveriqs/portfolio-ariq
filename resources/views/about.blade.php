@extends('layouts.app')
@section('title', 'About — Ariq Fadhilah Pasya Sipayung')
@section('content')

<section class="page-hero">
    <div class="container">
        <div class="py-5" data-aos="fade-up">
            <p class="section-label text-secondary-custom">Tentang Saya</p>
            <h1 class="hero-title text-white">Kenali Lebih<br><em>Dekat</em></h1>
        </div>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <div class="row g-5 align-items-start">
            <div class="col-lg-4 text-center" data-aos="fade-right">
                <img src="{{ asset('images/profil.jpg') }}" alt="Ariq Fadhilah"
    style="width:180px;height:180px;border-radius:50%;object-fit:cover;border:4px solid #0d0d0d;" class="mb-4">
                <h3 class="fw-semibold mb-1">Ariq Fadhilah Pasya Sipayung</h3>
                <p class="text-muted mb-3">Mahasiswa Teknik Informatika · Semester 4</p>
                <div class="d-flex flex-wrap gap-2 justify-content-center mb-4">
                    <span class="badge bg-dark">🌐 Web Dev</span>
                    <span class="badge bg-dark">🐍 Python</span>
                    <span class="badge bg-dark">🐘 PHP</span>
                    <span class="badge bg-dark">📚 Learner</span>
                </div>
                <a href="{{ route('contact') }}" class="btn btn-dark w-100">
                    <i class="fas fa-paper-plane me-2"></i> Hubungi Saya
                </a>
            </div>
            <div class="col-lg-8" data-aos="fade-left">
                <p class="section-label">Bio</p>
                <h2 class="section-title mb-4">Semangat Belajar,<br><em>Terus Berkembang</em></h2>
                <p class="text-muted lh-lg mb-3">Halo! Saya <strong>Ariq Fadhilah Pasya Sipayung</strong>, mahasiswa aktif jurusan Teknik Informatika semester 4. Saya memiliki passion besar di dunia <strong>Web Development</strong> — dari membangun antarmuka yang rapi hingga logika backend yang andal.</p>
                <p class="text-muted lh-lg mb-3">Perjalanan saya dimulai dari rasa ingin tahu tentang bagaimana sebuah website bekerja. Dari sana, saya mulai belajar HTML, CSS, lalu merambah ke PHP, Python, dan kini sedang mendalami framework Laravel.</p>
                <p class="text-muted lh-lg mb-4">Saya percaya bahwa setiap baris kode yang saya tulis hari ini adalah investasi untuk karir yang saya impikan.</p>

                <div class="row g-3">
                    <div class="col-6">
                        <div class="info-item">
                            <i class="fas fa-university text-dark"></i>
                            <div><div class="info-label">Jurusan</div><div class="info-value">Teknik Informatika</div></div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="info-item">
                            <i class="fas fa-layer-group text-dark"></i>
                            <div><div class="info-label">Semester</div><div class="info-value">4 (Aktif)</div></div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="info-item">
                            <i class="fas fa-code text-dark"></i>
                            <div><div class="info-label">Fokus</div><div class="info-value">Web Development</div></div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="info-item">
                            <i class="fas fa-map-marker-alt text-dark"></i>
                            <div><div class="info-label">Lokasi</div><div class="info-value">Indonesia</div></div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="info-item">
                            <i class="fas fa-envelope text-dark"></i>
                            <div><div class="info-label">Email</div><div class="info-value">ariq.240170197@mhs.unimal.ac.id</div></div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="info-item">
                            <i class="fas fa-circle text-success" style="font-size:10px"></i>
                            <div><div class="info-label">Status</div><div class="info-value">Open to Collaborate</div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col" data-aos="fade-up">
                <p class="section-label">Pendidikan & Tujuan</p>
                <h2 class="section-title">Perjalanan<br><em>Akademik Saya</em></h2>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-6" data-aos="fade-up">
                <div class="timeline-card">
                    <div class="timeline-icon"><i class="fas fa-graduation-cap"></i></div>
                    <div>
                        <div class="timeline-year">2023 – Sekarang</div>
                        <h4 class="fw-semibold mb-2">S1 Teknik Informatika</h4>
                        <p class="text-muted small mb-0">Menempuh pendidikan jurusan Teknik Informatika. Mata kuliah aktif: Pemrograman Web, Framework Web, Basis Data Lanjutan, Algoritma & Struktur Data.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="timeline-card">
                    <div class="timeline-icon"><i class="fas fa-bullseye"></i></div>
                    <div>
                        <div class="timeline-year">Target 2026</div>
                        <h4 class="fw-semibold mb-2">Full Stack Developer</h4>
                        <p class="text-muted small mb-0">Target jangka pendek: menguasai Laravel & React.js. Jangka panjang: menjadi Full Stack Developer yang mampu membangun produk digital dari nol.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="timeline-card">
                    <div class="timeline-icon"><i class="fas fa-laptop-code"></i></div>
                    <div>
                        <div class="timeline-year">Self-Learning</div>
                        <h4 class="fw-semibold mb-2">Belajar Mandiri</h4>
                        <p class="text-muted small mb-0">Aktif belajar melalui YouTube, dokumentasi resmi, dan freeCodeCamp. Selalu mencoba membangun project sendiri untuk mempraktikkan ilmu baru.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="timeline-card">
                    <div class="timeline-icon"><i class="fas fa-users"></i></div>
                    <div>
                        <div class="timeline-year">2025</div>
                        <h4 class="fw-semibold mb-2">Open for Internship</h4>
                        <p class="text-muted small mb-0">Sedang mencari kesempatan magang atau kolaborasi proyek untuk mendapatkan pengalaman nyata di industri teknologi.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection