<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Ariq Fadhilah — Portfolio')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    <style>
        :root {
            --black: #0d0d0d;
            --off-white: #f7f5f0;
            --warm-gray: #e8e5de;
            --mid-gray: #9a9690;
            --accent: #2d5a3d;
            --accent-light: #e8f0ea;
        }
        * { box-sizing: border-box; margin: 0; padding: 0; }
        html { scroll-behavior: smooth; }
        body { font-family: 'DM Sans', sans-serif; background: var(--off-white); color: var(--black); overflow-x: hidden; }

        /* NAVBAR */
        #mainNav { background: rgba(247,245,240,0.95); backdrop-filter: blur(16px); border-bottom: 1px solid var(--warm-gray); padding: 1rem 0; transition: all 0.3s; }
        #mainNav.scrolled { padding: 0.6rem 0; box-shadow: 0 4px 30px rgba(0,0,0,0.06); }
        .navbar-brand { font-family: 'DM Serif Display', serif; font-size: 1.4rem; color: var(--black) !important; }
        .brand-accent { color: var(--accent); }
        .nav-link { font-size: 0.85rem; font-weight: 500; color: var(--mid-gray) !important; padding: 0.4rem 0.8rem !important; border-radius: 6px; transition: all 0.2s; }
        .nav-link:hover, .nav-link.active { color: var(--black) !important; background: var(--warm-gray); }

        /* BUTTONS */
        .btn-dark { background: var(--black); border-color: var(--black); border-radius: 8px; font-weight: 500; transition: all 0.2s; }
        .btn-dark:hover { background: #2a2a27; transform: translateY(-1px); }
        .btn-outline-dark { border-color: var(--warm-gray); color: var(--black); border-radius: 8px; font-weight: 500; }
        .btn-outline-dark:hover { background: var(--black); border-color: var(--black); transform: translateY(-1px); }

        /* SECTIONS */
        .section-padding { padding: 5rem 0; }
        .section-label { font-size: 0.75rem; font-weight: 600; letter-spacing: 0.15em; text-transform: uppercase; color: var(--mid-gray); margin-bottom: 0.75rem; }
        .section-title { font-family: 'DM Serif Display', serif; font-size: clamp(2rem, 4vw, 3rem); color: var(--black); line-height: 1.1; }
        .section-title em { font-style: italic; color: var(--accent); }
        .text-secondary-custom { color: #666 !important; }

        /* PAGE HERO */
        .page-hero { padding: 120px 0 60px; background: var(--black); }
        .hero-title { font-family: 'DM Serif Display', serif; font-size: clamp(2.5rem, 6vw, 4.5rem); line-height: 1.05; }
        .hero-title em { font-style: italic; color: #4ade80; }

        /* PROJECT CARDS */
        .project-card { background: white; border: 1px solid var(--warm-gray); border-radius: 12px; overflow: hidden; transition: transform 0.25s, box-shadow 0.25s; height: 100%; }
        .project-card:hover { transform: translateY(-6px); box-shadow: 0 20px 60px rgba(0,0,0,0.1); }
        .project-thumb { height: 160px; display: flex; align-items: center; justify-content: center; font-size: 3rem; }
        .thumb-1 { background: linear-gradient(135deg, #e8f0ea, #c5dac9); }
        .thumb-2 { background: linear-gradient(135deg, #f0ede8, #d9cfc3); }
        .thumb-3 { background: linear-gradient(135deg, #eae8f0, #c9c5da); }
        .thumb-4 { background: linear-gradient(135deg, #e8f4f0, #b8d9d2); }
        .thumb-5 { background: linear-gradient(135deg, #f5eae8, #dac5c3); }
        .project-category { font-size: 0.72rem; font-weight: 600; letter-spacing: 0.1em; text-transform: uppercase; color: var(--accent); }
        .project-title { font-family: 'DM Serif Display', serif; font-size: 1.15rem; color: var(--black); line-height: 1.3; }
        .project-desc { font-size: 0.85rem; color: var(--mid-gray); line-height: 1.65; }
        .tech-badge { font-size: 0.72rem; font-weight: 500; padding: 0.25rem 0.7rem; background: var(--accent-light); color: var(--accent); border-radius: 100px; display: inline-block; margin: 2px; }

        /* SKILLS */
        .skill-card-dark { background: #1a1a18; border: 1px solid #2a2a27; border-radius: 10px; padding: 1.25rem; display: flex; align-items: center; gap: 1rem; transition: border-color 0.2s; }
        .skill-card-dark:hover { border-color: #4ade80; }
        .skill-bar-wrap { height: 4px; background: #2a2a27; border-radius: 2px; overflow: hidden; margin-top: 6px; }
        .skill-bar-fill { height: 100%; background: #4ade80; border-radius: 2px; }
        .skill-card-light { background: white; border: 1px solid var(--warm-gray); border-radius: 12px; padding: 1.5rem; transition: transform 0.2s, box-shadow 0.2s; }
        .skill-card-light:hover { transform: translateY(-3px); box-shadow: 0 8px 30px rgba(0,0,0,0.08); }
        .progress-bar-wrap { height: 6px; background: var(--warm-gray); border-radius: 3px; overflow: hidden; }
        .progress-bar-fill { height: 100%; background: var(--black); border-radius: 3px; transition: width 1.2s ease; }
        .skill-icon-circle { width: 44px; height: 44px; background: var(--warm-gray); border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; flex-shrink: 0; }

        /* HERO */
        .hero-section { min-height: 100vh; background: var(--off-white); position: relative; overflow: hidden; padding-top: 80px; display: flex; align-items: center; }
        .hero-bg-text { position: absolute; top: 50%; left: 50%; transform: translate(-40%, -50%); font-family: 'DM Serif Display', serif; font-size: clamp(8rem, 22vw, 18rem); color: var(--warm-gray); pointer-events: none; user-select: none; z-index: 0; letter-spacing: -0.05em; white-space: nowrap; }
        .hero-badge { display: inline-flex; align-items: center; gap: 8px; font-size: 0.78rem; font-weight: 500; letter-spacing: 0.08em; text-transform: uppercase; color: var(--accent); background: var(--accent-light); padding: 0.45rem 1rem; border-radius: 100px; }
        .badge-dot { width: 7px; height: 7px; border-radius: 50%; background: var(--accent); animation: pulse 2s infinite; }
        @keyframes pulse { 0%,100%{opacity:1} 50%{opacity:0.4} }
        .hero-subtitle { font-size: 1.05rem; line-height: 1.75; color: var(--mid-gray); max-width: 500px; font-weight: 300; }
        .stat-number { font-family: 'DM Serif Display', serif; font-size: 2.2rem; color: var(--black); line-height: 1; }
        .stat-label { font-size: 0.8rem; color: var(--mid-gray); }
        .avatar-placeholder { width: 260px; height: 260px; border-radius: 50%; background: var(--warm-gray); border: 4px solid var(--black); display: flex; align-items: center; justify-content: center; font-family: 'DM Serif Display', serif; font-size: 2.8rem; color: var(--black); }
        .scroll-indicator { position: absolute; bottom: 2rem; left: 50%; transform: translateX(-50%); color: var(--mid-gray); text-decoration: none; animation: bounce 2s infinite; }
        @keyframes bounce { 0%,100%{transform:translateX(-50%) translateY(0)} 50%{transform:translateX(-50%) translateY(8px)} }

        /* CONTACT */
        .contact-form-wrap { background: white; border: 1px solid var(--warm-gray); border-radius: 16px; padding: 2.5rem; }
        .contact-info-item { display: flex; align-items: center; gap: 1rem; padding: 1rem 1.25rem; background: white; border: 1px solid var(--warm-gray); border-radius: 10px; margin-bottom: 1rem; }
        .contact-info-icon { width: 40px; height: 40px; background: var(--black); color: white; border-radius: 8px; display: flex; align-items: center; justify-content: center; flex-shrink: 0; }
        .contact-info-label { font-size: 0.75rem; color: var(--mid-gray); }
        .contact-info-value { font-size: 0.9rem; font-weight: 500; color: var(--black); text-decoration: none; }
        .contact-info-value:hover { color: var(--accent); }

        /* ABOUT */
        .about-avatar { width: 180px; height: 180px; border-radius: 50%; background: var(--warm-gray); border: 4px solid var(--black); display: inline-flex; align-items: center; justify-content: center; font-family: 'DM Serif Display', serif; font-size: 2.2rem; }
        .info-item { display: flex; align-items: center; gap: 0.75rem; padding: 0.75rem; background: white; border: 1px solid var(--warm-gray); border-radius: 8px; margin-bottom: 0.75rem; }
        .info-label { font-size: 0.75rem; color: var(--mid-gray); }
        .info-value { font-size: 0.88rem; font-weight: 500; }
        .timeline-card { background: white; border: 1px solid var(--warm-gray); border-radius: 12px; padding: 1.75rem; display: flex; gap: 1.25rem; margin-bottom: 1rem; transition: transform 0.2s; }
        .timeline-card:hover { transform: translateY(-4px); }
        .timeline-icon { width: 44px; height: 44px; background: var(--black); color: white; border-radius: 10px; display: flex; align-items: center; justify-content: center; flex-shrink: 0; }
        .timeline-year { font-size: 0.75rem; color: var(--accent); font-weight: 600; text-transform: uppercase; letter-spacing: 0.08em; }

        /* FILTER */
        .filter-btn { padding: 0.45rem 1.1rem; border: 1.5px solid var(--warm-gray); background: white; border-radius: 100px; font-size: 0.82rem; font-weight: 500; color: var(--mid-gray); cursor: pointer; transition: all 0.2s; margin: 3px; }
        .filter-btn:hover, .filter-btn.active { background: var(--black); color: white; border-color: var(--black); }

        /* CTA */
        .cta-block { background: white; border: 1px solid var(--warm-gray); border-radius: 20px; padding: 4rem 2rem; text-align: center; }

        /* FOOTER */
        .footer-main { background: var(--black); color: white; padding: 3rem 0 1.5rem; }
        .footer-brand { font-family: 'DM Serif Display', serif; font-size: 1.5rem; color: white; }
        .social-link { width: 36px; height: 36px; background: #1a1a18; border: 1px solid #2a2a27; border-radius: 8px; display: inline-flex; align-items: center; justify-content: center; color: var(--mid-gray); text-decoration: none; transition: all 0.2s; margin-right: 6px; }
        .social-link:hover { background: white; color: var(--black); border-color: white; }

        .learning-note { background: var(--accent-light); border: 1px solid #b8d4be; border-radius: 12px; padding: 1.75rem 2rem; }

        @media(max-width:767px){ .section-padding{padding:3.5rem 0;} .hero-bg-text{font-size:6rem;} .contact-form-wrap{padding:1.5rem;} }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">Ariq<span class="brand-accent">.</span></a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center gap-1">
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('projects') ? 'active' : '' }}" href="{{ route('projects') }}">Projects</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('skills') ? 'active' : '' }}" href="{{ route('skills') }}">Skills</a></li>
                <li class="nav-item ms-2"><a class="btn btn-dark btn-sm px-4" href="{{ route('contact') }}"><i class="fas fa-paper-plane me-1"></i> Hubungi Saya</a></li>
            </ul>
        </div>
    </div>
</nav>

<main>@yield('content')</main>

<footer class="footer-main">
    <div class="container">
        <div class="row align-items-center mb-4">
            <div class="col-md-4 mb-3 mb-md-0">
                <div class="footer-brand mb-1">Ariq<span class="brand-accent">.</span></div>
                <p class="text-muted small mb-0">Mahasiswa Teknik Informatika · Semester 4</p>
            </div>
            <div class="col-md-4 text-md-center mb-3 mb-md-0">
                <a href="{{ route('home') }}" class="text-muted text-decoration-none small me-3">Home</a>
                <a href="{{ route('about') }}" class="text-muted text-decoration-none small me-3">About</a>
                <a href="{{ route('projects') }}" class="text-muted text-decoration-none small me-3">Projects</a>
                <a href="{{ route('contact') }}" class="text-muted text-decoration-none small">Contact</a>
            </div>
            <div class="col-md-4 text-md-end">
                <a href="https://github.com/ariqfps" target="_blank" class="social-link"><i class="fab fa-github"></i></a>
                <a href="https://linkedin.com/in/ariqfps" target="_blank" class="social-link"><i class="fab fa-linkedin"></i></a>
                <a href="https://instagram.com/ariqfps" target="_blank" class="social-link"><i class="fab fa-instagram"></i></a>
                <a href="mailto:ariq@email.com" class="social-link"><i class="fas fa-envelope"></i></a>
            </div>
        </div>
        <hr style="border-color:#2a2a27;opacity:0.5;">
        <p class="text-center text-muted small mb-0">© {{ date('Y') }} Ariq Fadhilah Pasya Sipayung </p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({ duration: 700, easing: 'ease-out-cubic', once: true, offset: 60 });
    window.addEventListener('scroll', () => {
        document.getElementById('mainNav').classList.toggle('scrolled', window.scrollY > 50);
    });
    document.querySelectorAll('.navbar-nav .nav-link').forEach(link => {
        link.addEventListener('click', () => {
            const collapse = document.getElementById('navbarNav');
            if (collapse.classList.contains('show')) {
                document.querySelector('.navbar-toggler').click();
            }
        });
    });
</script>
@stack('scripts')
</body>
</html>