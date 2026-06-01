<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    private function getProjects()
    {
        return [
            ['id'=>1,'title'=>'Website Profil Kampus','category'=>'Web App','desc'=>'Website statis untuk menampilkan profil jurusan Teknik Informatika dengan tampilan responsif dan modern.','tech'=>['HTML5','CSS3','JavaScript'],'github'=>'#','demo'=>null,'featured'=>true],
            ['id'=>2,'title'=>'Sistem Manajemen Data Mahasiswa','category'=>'CRUD App','desc'=>'Aplikasi CRUD berbasis PHP dan MySQL untuk manajemen data mahasiswa lengkap dengan fitur pencarian.','tech'=>['PHP','MySQL','HTML','CSS','Bootstrap'],'github'=>'#','demo'=>null,'featured'=>true],
            ['id'=>3,'title'=>'Kalkulator Multi-Fungsi Python','category'=>'Script','desc'=>'Program kalkulator terminal menggunakan Python dengan operasi dasar dan lanjutan berbasis OOP.','tech'=>['Python 3'],'github'=>'#','demo'=>null,'featured'=>true],
            ['id'=>4,'title'=>'Portfolio Website (Project UTS)','category'=>'Web App','desc'=>'Website portfolio personal dibangun dengan Laravel 10. Fitur lengkap dengan halaman home, about, projects, skills, dan contact form.','tech'=>['Laravel 10','PHP 8','Bootstrap 5','JavaScript'],'github'=>'#','demo'=>'#','featured'=>false],
            ['id'=>5,'title'=>'Aplikasi Absensi Sederhana','category'=>'CRUD App','desc'=>'Sistem absensi berbasis web dengan dua role: admin dan mahasiswa. Admin dapat mengelola data dan laporan absensi.','tech'=>['PHP','MySQL','HTML','CSS'],'github'=>'#','demo'=>null,'featured'=>false],
        ];
    }

    private function getSkills()
    {
        return [
            ['name'=>'HTML5','category'=>'Frontend','level'=>80,'icon'=>'🌐','desc'=>'Semantic markup & struktur web'],
            ['name'=>'CSS3','category'=>'Frontend','level'=>70,'icon'=>'🎨','desc'=>'Flexbox, Grid, Responsive Design'],
            ['name'=>'JavaScript','category'=>'Frontend','level'=>45,'icon'=>'⚡','desc'=>'DOM manipulation & event handling'],
            ['name'=>'Bootstrap','category'=>'Frontend','level'=>65,'icon'=>'🅱','desc'=>'UI component framework'],
            ['name'=>'PHP','category'=>'Backend','level'=>60,'icon'=>'🐘','desc'=>'Server-side scripting'],
            ['name'=>'Laravel','category'=>'Backend','level'=>40,'icon'=>'🔴','desc'=>'PHP framework (sedang dipelajari)'],
            ['name'=>'Python','category'=>'Backend','level'=>50,'icon'=>'🐍','desc'=>'Scripting & pemrosesan data'],
            ['name'=>'MySQL','category'=>'Database','level'=>60,'icon'=>'🗄','desc'=>'Relational database & query'],
            ['name'=>'Git','category'=>'Tools','level'=>55,'icon'=>'📦','desc'=>'Version control'],
            ['name'=>'VS Code','category'=>'Tools','level'=>80,'icon'=>'💻','desc'=>'Code editor utama'],
        ];
    }

    public function index()
    {
        $projects = collect($this->getProjects())->where('featured', true)->values();
        $skills = collect($this->getSkills());
        return view('home', compact('projects', 'skills'));
    }

    public function about()
    {
        $skills = collect($this->getSkills());
        return view('about', compact('skills'));
    }

    public function projects()
    {
        $projects = collect($this->getProjects());
        $categories = $projects->pluck('category')->unique()->values();
        return view('projects', compact('projects', 'categories'));
    }

    public function skills()
    {
        $skills = collect($this->getSkills());
        $categories = $skills->pluck('category')->unique()->values();
        return view('skills', compact('skills', 'categories'));
    }

    public function contact()
    {
        return view('contact');
    }
}