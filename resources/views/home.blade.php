@extends('layouts.main')

@section('title', 'Home - Portofolio M Ghiffari')

@section('content')
<style>
    .home-intro-box {
        background: #ffffff;
        border: 1px solid #e5eaf1;
        border-radius: 14px;
        padding: 18px 24px;
        box-shadow: 0 4px 16px rgba(23, 43, 77, 0.04);
    }

    .showcase-card {
        background: #ffffff;
        border: 1px solid #e5eaf1;
        border-radius: 18px;
        box-shadow: 0 12px 30px rgba(36, 120, 242, 0.08);
    }

    .icon-circle {
        width: 88px;
        height: 88px;
        border-radius: 50%;
        background: #eaf3ff;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }
</style>

<section class="hero">
    <div class="container">
        <div class="home-intro-box mb-4">
            <h1 class="h4 fw-bold mb-1">Teknologi Informasi</h1>
            <p class="text-secondary mb-0">Selamat datang di website portofolio saya.</p>
        </div>

        <div class="row align-items-center g-5 pt-2">
            <div class="col-lg-7">
                <p class="fw-semibold mb-2" style="color: #2478f2; letter-spacing: 0.4px;">
                    HALO, SELAMAT DATANG!
                </p>

                <h2 class="display-5 fw-bold mb-2">
                    Saya M Ghiffari
                </h2>

                <h3 class="h4 text-secondary fw-semibold mb-3">
                    Mahasiswa Teknologi Informasi
                </h3>

                <p class="lead text-secondary mb-4">
                    Saya tertarik dengan pengembangan website,
                    pemrograman, dan teknologi digital. Ini adalah
                    website portofolio saya.
                </p>

                <div class="d-flex flex-wrap gap-3 mt-3">
                    <a href="{{ route('profile') }}" class="btn btn-primary btn-lg px-4">
                        Lihat Profil
                    </a>

                    <a href="{{ route('berita') }}" class="btn btn-outline-primary btn-lg px-4">
                        Lihat Berita
                    </a>
                </div>
            </div>

            <div class="col-lg-5 text-center">
                <div class="showcase-card p-5">
                    <div class="icon-circle mb-3">
                        <div class="display-4">👨‍💻</div>
                    </div>
                    <h3 class="h4 fw-bold mt-2">Web Developer</h3>
                    <p class="text-secondary mb-0">
                        Belajar, berkarya, dan berkembang.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-space">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-2">Tentang Portofolio Ini</h2>
            <p class="text-secondary mb-0">
                Beberapa hal yang sedang saya pelajari.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-body p-4">
                        <h3 class="h5 fw-bold mb-2">Pengembangan Web</h3>
                        <p class="text-secondary mb-0">
                            Membuat website menggunakan HTML,
                            CSS, Bootstrap, dan Laravel.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-body p-4">
                        <h3 class="h5 fw-bold mb-2">Pemrograman</h3>
                        <p class="text-secondary mb-0">
                            Mempelajari logika pemrograman dan
                            pengembangan aplikasi.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-body p-4">
                        <h3 class="h5 fw-bold mb-2">Teknologi Informasi</h3>
                        <p class="text-secondary mb-0">
                            Mengembangkan pengetahuan dan
                            keterampilan di bidang teknologi.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection