@extends('layouts.app')
@section('title', 'Skills — Ariq Fadhilah Pasya Sipayung')
@section('content')

<section class="page-hero">
    <div class="container">
        <div class="py-5" data-aos="fade-up">
            <p class="section-label text-secondary-custom">Kemampuan Teknis</p>
            <h1 class="hero-title text-white">Tech Stack<br><em>Saya</em></h1>
        </div>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        @foreach($categories as $category)
        <div class="mb-5" data-aos="fade-up">
            <p class="section-label">{{ $category }}</p>
            <div class="row g-4">
                @foreach($skills->where('category', $category) as $skill)
                <div class="col-md-6 col-lg-4">
                    <div class="skill-card-light">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="skill-icon-circle">{{ $skill['icon'] }}</div>
                            <div style="flex:1">
                                <div class="fw-semibold">{{ $skill['name'] }}</div>
                                <div class="small text-muted">{{ $skill['desc'] }}</div>
                            </div>
                            <span class="badge bg-dark small">
                                {{ $skill['level'] >= 80 ? 'Mahir' : ($skill['level'] >= 60 ? 'Menengah' : ($skill['level'] >= 40 ? 'Dasar' : 'Belajar')) }}
                            </span>
                        </div>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar-fill" data-width="{{ $skill['level'] }}" style="width:0%"></div>
                        </div>
                        <div class="d-flex justify-content-between mt-1">
                            <span class="small text-muted">Kemahiran</span>
                            <span class="small fw-medium">{{ $skill['level'] }}%</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endforeach

        <div class="learning-note mt-3" data-aos="fade-up">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h4 class="fw-semibold mb-2">🚀 Terus Belajar</h4>
                    <p class="text-muted mb-0">Sebagai mahasiswa semester 4, saya terus aktif belajar dan mengembangkan skill. Target berikutnya: <strong>React.js</strong>, <strong>Laravel Advanced</strong>, dan <strong>Docker</strong>.</p>
                </div>
                <div class="col-md-4 text-md-end mt-3 mt-md-0">
                    <a href="{{ route('contact') }}" class="btn btn-dark px-4">Diskusi Bareng <i class="fas fa-arrow-right ms-1"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
const bars = document.querySelectorAll('.progress-bar-fill');
const observer = new IntersectionObserver(entries => {
    entries.forEach(e => {
        if (e.isIntersecting) {
            e.target.style.width = e.target.dataset.width + '%';
            observer.unobserve(e.target);
        }
    });
}, { threshold: 0.3 });
bars.forEach(b => observer.observe(b));
</script>
@endpush