@extends('layouts.app')
@section('title', 'Projects — Ariq Fadhilah Pasya Sipayung')
@section('content')

<section class="page-hero">
    <div class="container">
        <div class="py-5" data-aos="fade-up">
            <p class="section-label text-secondary-custom">Karya Saya</p>
            <h1 class="hero-title text-white">Semua<br><em>Proyek</em></h1>
            <p class="text-muted mt-2">{{ $projects->count() }} proyek yang telah saya kerjakan</p>
        </div>
    </div>
</section>

<section class="section-padding">
    <div class="container">

        <div class="mb-5" data-aos="fade-up">
            <button class="filter-btn active" data-filter="all">Semua</button>
            @foreach($categories as $cat)
                <button class="filter-btn" data-filter="{{ Str::slug($cat) }}">{{ $cat }}</button>
            @endforeach
        </div>

        <div class="row g-4" id="projectGrid">
            @foreach($projects as $i => $project)
            <div class="col-md-6 col-lg-4 project-item" data-category="{{ Str::slug($project['category']) }}" data-aos="fade-up" data-aos-delay="{{ ($i % 3) * 100 }}">
                <div class="project-card">
                    <div class="project-thumb thumb-{{ ($i % 5) + 1 }}">
                        {{ $project['category'] === 'Web App' ? '🌐' : ($project['category'] === 'CRUD App' ? '📋' : '🐍') }}
                    </div>
                    <div class="p-4 d-flex flex-column" style="flex:1">
                        <p class="project-category mb-1">{{ $project['category'] }}</p>
                        <h3 class="project-title mb-2">{{ $project['title'] }}</h3>
                        <p class="project-desc mb-3" style="flex:1">{{ Str::limit($project['desc'], 120) }}</p>
                        <div class="mb-3">
                            @foreach($project['tech'] as $tech)
                                <span class="tech-badge">{{ $tech }}</span>
                            @endforeach
                        </div>
                        <div class="d-flex gap-2">
                            @if($project['github'] !== null)
                            <a href="{{ $project['github'] }}" class="btn btn-dark btn-sm flex-fill text-center">
                                <i class="fab fa-github me-1"></i> GitHub
                            </a>
                            @endif
                            @if($project['demo'] !== null)
                            <a href="{{ $project['demo'] }}" class="btn btn-outline-dark btn-sm">
                                <i class="fas fa-external-link-alt"></i>
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>

@endsection

@push('scripts')
<script>
document.querySelectorAll('.filter-btn').forEach(btn => {
    btn.addEventListener('click', function() {
        document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
        this.classList.add('active');
        const filter = this.dataset.filter;
        document.querySelectorAll('.project-item').forEach(item => {
            item.style.display = (filter === 'all' || item.dataset.category === filter) ? 'block' : 'none';
        });
    });
});
</script>
@endpush