@extends('layouts.app')
@section('title', 'Ariq Fadhilah Pasya Sipayung — Web Developer')
@section('content')

<section class="hero-section">
    <div class="hero-bg-text" aria-hidden="true">DEV</div>
    <div class="container position-relative py-5">
        <div class="row align-items-center">
            <div class="col-lg-7" data-aos="fade-up">
                <div class="hero-badge mb-4">
                    <span class="badge-dot"></span> Available for Collaboration
                </div>
                <h1 class="hero-title mb-0">Ariq Fadhilah</h1>
                <h1 class="hero-title mb-4"><em>Pasya Sipayung</em></h1>
                <p class="hero-subtitle mb-5">
                    Mahasiswa <strong>Teknik Informatika</strong> semester 4 yang antusias dalam
                    dunia <strong>Web Development</strong>. Membangun pengalaman digital yang bersih,
                    fungsional, dan bermakna.
                </p>
                <div class="d-flex gap-3 flex-wrap mb-5">
                    <a href="{{ route('projects') }}" class="btn btn-dark btn-lg px-5">Lihat Proyek <i class="fas fa-arrow-right ms-2"></i></a>
                    <a href="{{ route('contact') }}" class="btn btn-outline-dark btn-lg px-5">Hubungi Saya</a>
                </div>
                <div class="d-flex gap-5">
                    <div><div class="stat-number">{{ $projects->count() }}+</div><div class="stat-label">Proyek</div></div>
                    <div><div class="stat-number">4</div><div class="stat-label">Semester</div></div>
                    <div><div class="stat-number">{{ $skills->count() }}+</div><div class="stat-label">Skill</div></div>
                </div>
            </div>
            <div class="col-lg-5 d-none d-lg-flex justify-content-center" data-aos="fade-left" data-aos-delay="200">
                <img src="{{ asset('images/profil.jpg') }}" alt="Ariq Fadhilah"
    style="width:260px;height:260px;border-radius:50%;object-fit:cover;border:4px solid #0d0d0d;">
            </div>
        </div>
    </div>
    <a href="#featured" class="scroll-indicator"><i class="fas fa-chevron-down"></i></a>
</section>

<section class="section-padding bg-light" id="featured">
    <div class="container">
        <div class="row mb-5 align-items-end">
            <div class="col-lg-6" data-aos="fade-up">
                <p class="section-label">Proyek Unggulan</p>
                <h2 class="section-title">Yang Sudah<br><em>Saya Buat</em></h2>
            </div>
            <div class="col-lg-6 text-lg-end" data-aos="fade-up">
                <a href="{{ route('projects') }}" class="btn btn-outline-dark">Semua Proyek <i class="fas fa-arrow-right ms-1"></i></a>
            </div>
        </div>
        <div class="row g-4">
            @foreach($projects as $i => $project)
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="{{ $i * 100 }}">
                <div class="project-card">
                    <div class="project-thumb thumb-{{ $i + 1 }}">
                        {{ $project['category'] === 'Web App' ? '🌐' : ($project['category'] === 'CRUD App' ? '📋' : '🐍') }}
                    </div>
                    <div class="p-4">
                        <p class="project-category mb-1">{{ $project['category'] }}</p>
                        <h3 class="project-title mb-2">{{ $project['title'] }}</h3>
                        <p class="project-desc mb-3">{{ Str::limit($project['desc'], 100) }}</p>
                        <div class="mb-3">
                            @foreach($project['tech'] as $tech)
                                <span class="tech-badge">{{ $tech }}</span>
                            @endforeach
                        </div>
                        <a href="{{ route('projects') }}" class="btn btn-dark btn-sm">Detail <i class="fas fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="section-padding bg-dark text-white">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-6" data-aos="fade-up">
                <p class="section-label text-secondary-custom">Tech Stack</p>
                <h2 class="section-title text-white">Teknologi yang<br><em style="color:#4ade80">Saya Kuasai</em></h2>
            </div>
        </div>
        <div class="row g-3">
            @foreach($skills->take(8) as $i => $skill)
            <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="{{ $i * 50 }}">
                <div class="skill-card-dark">
                    <div style="font-size:1.8rem;flex-shrink:0">{{ $skill['icon'] }}</div>
                    <div style="flex:1;min-width:0">
                        <div style="color:white;font-weight:500;font-size:0.9rem">{{ $skill['name'] }}</div>
                        <div class="skill-bar-wrap">
                            <div class="skill-bar-fill" style="width:{{ $skill['level'] }}%"></div>
                        </div>
                        <div style="font-size:0.72rem;color:#555;margin-top:4px">{{ $skill['level'] }}%</div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="text-center mt-5" data-aos="fade-up">
            <a href="{{ route('skills') }}" class="btn btn-outline-light px-5">Lihat Semua Skill <i class="fas fa-arrow-right ms-2"></i></a>
        </div>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <div class="cta-block" data-aos="zoom-in">
            <p class="section-label">Tertarik Berkolaborasi?</p>
            <h2 class="section-title mb-3">Mari Kita<br><em>Buat Sesuatu Bersama</em></h2>
            <p class="text-muted mb-5 mx-auto" style="max-width:480px">Saya terbuka untuk proyek kampus, diskusi teknologi, maupun kolaborasi sederhana.</p>
            <a href="{{ route('contact') }}" class="btn btn-dark btn-lg px-5"><i class="fas fa-paper-plane me-2"></i> Kirim Pesan</a>
        </div>
    </div>
</section>

@endsection