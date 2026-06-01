@extends('layouts.app')
@section('title', 'Contact — Ariq Fadhilah Pasya Sipayung')
@section('content')

<section class="page-hero">
    <div class="container">
        <div class="py-5" data-aos="fade-up">
            <p class="section-label text-secondary-custom">Hubungi Saya</p>
            <h1 class="hero-title text-white">Mari<br><em>Terhubung</em></h1>
        </div>
    </div>
</section>

<section class="section-padding">
    <div class="container">

        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show mb-5" role="alert">
            <i class="fas fa-check-circle me-2"></i> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        @endif

        <div class="row g-5">
            <div class="col-lg-5" data-aos="fade-right">
                <p class="section-label">Info Kontak</p>
                <h2 class="section-title mb-3">Jangan Ragu<br><em>untuk Berkata Hi!</em></h2>
                <p class="text-muted mb-5">Saya terbuka untuk diskusi proyek, kolaborasi, atau sekadar say hello. Respon dalam 1×24 jam.</p>

                <div class="contact-info-item">
                    <div class="contact-info-icon"><i class="fas fa-envelope"></i></div>
                    <div>
                        <div class="contact-info-label">Email</div>
                        <a href="mailto:ariq.240170197@mhs.unimal.ac.id" class="contact-info-value">ariq.240170197@mhs.unimal.ac.id</a>
                    </div>
                </div>
                <div class="contact-info-item">
                    <div class="contact-info-icon"><i class="fab fa-github"></i></div>
                    <div>
                        <div class="contact-info-label">GitHub</div>
                        <a href="https://github.com/meveriqs" target="_blank" class="contact-info-value">github.com/meveriqs</a>
                    </div>
                </div>
                <div class="contact-info-item">
                    <div class="contact-info-icon"><i class="fab fa-linkedin"></i></div>
                    <div>
                        <div class="contact-info-label">LinkedIn</div>
                        <a href="https://www.linkedin.com/in/ariq-fadhilah-pasya-s-217a32412/" target="_blank" class="contact-info-value">linkedin.com/in/ariqfps</a>
                    </div>
                </div>
                <div class="contact-info-item">
                    <div class="contact-info-icon"><i class="fab fa-instagram"></i></div>
                    <div>
                        <div class="contact-info-label">Instagram</div>
                        <a href="https://www.instagram.com/meveriqs?igsh=MWU0YXBuNHk2N2lkMA==" target="_blank" class="contact-info-value">@meveriqs</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-7" data-aos="fade-left">
                <div class="contact-form-wrap">
                    <h3 class="fw-semibold mb-4">Kirim Pesan</h3>
                    <form action="{{ route('contact.send') }}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label fw-medium">Nama Lengkap <span class="text-danger">*</span></label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                    placeholder="Nama kamu" value="{{ old('name') }}" required>
                                @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-medium">Email <span class="text-danger">*</span></label>
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                    placeholder="email@kamu.com" value="{{ old('email') }}" required>
                                @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-12">
                                <label class="form-label fw-medium">Subjek <span class="text-danger">*</span></label>
                                <input type="text" name="subject" class="form-control @error('subject') is-invalid @enderror"
                                    placeholder="Perihal pesan" value="{{ old('subject') }}" required>
                                @error('subject')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-12">
                                <label class="form-label fw-medium">Pesan <span class="text-danger">*</span></label>
                                <textarea name="message" rows="5" class="form-control @error('message') is-invalid @enderror"
                                    placeholder="Tulis pesanmu di sini..." required>{{ old('message') }}</textarea>
                                @error('message')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-dark btn-lg w-100">
                                    <i class="fas fa-paper-plane me-2"></i> Kirim Pesan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection