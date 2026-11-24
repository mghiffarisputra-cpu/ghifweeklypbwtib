@extends('layouts.main')

@section('title', 'Berita - Portofolio M Ghiffari')

@section('content')
<style>
    .berita-header-box {
        background: linear-gradient(135deg, #eaf3ff, #ffffff);
        border: 1px solid #e5eaf1;
        border-radius: 16px;
        padding: 28px 32px;
        margin-bottom: 36px;
        box-shadow: 0 4px 16px rgba(23, 43, 77, 0.04);
    }

    .berita-card {
        background: #ffffff;
        border: 1px solid #e5eaf1;
        border-radius: 16px;
        transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease;
    }

    .berita-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 28px rgba(23, 43, 77, 0.08) !important;
        border-color: rgba(36, 120, 242, 0.3);
    }

    .berita-badge {
        font-size: 0.78rem;
        font-weight: 600;
        padding: 6px 12px;
        border-radius: 999px;
        letter-spacing: 0.3px;
    }
</style>

<section class="section-space">
    <div class="container">
        <div class="berita-header-box">
            <h1 class="fw-bold mb-1">Berita dan Artikel</h1>

            <p class="text-secondary mb-0">
                Catatan seputar pemrograman dan teknologi informasi.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="card berita-card h-100 shadow-sm">
                    <div class="card-body p-4 d-flex flex-column">
                        <div>
                            <span class="badge text-bg-primary berita-badge mb-3">
                                Laravel
                            </span>
                        </div>

                        <h2 class="h5 fw-bold mb-2">Mengenal Laravel 12</h2>

                        <p class="text-secondary mb-0" style="line-height: 1.65;">
                            Laravel adalah framework PHP yang
                            membantu pengembangan aplikasi web
                            dengan struktur yang terorganisasi.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card berita-card h-100 shadow-sm">
                    <div class="card-body p-4 d-flex flex-column">
                        <div>
                            <span class="badge text-bg-success berita-badge mb-3">
                                Bootstrap
                            </span>
                        </div>

                        <h2 class="h5 fw-bold mb-2">Membuat Website Responsif</h2>

                        <p class="text-secondary mb-0" style="line-height: 1.65;">
                            Bootstrap menyediakan komponen dan
                            sistem grid untuk membuat tampilan
                            website yang menyesuaikan layar.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card berita-card h-100 shadow-sm">
                    <div class="card-body p-4 d-flex flex-column">
                        <div>
                            <span class="badge text-bg-warning berita-badge mb-3">
                                Programming
                            </span>
                        </div>

                        <h2 class="h5 fw-bold mb-2">Belajar Pemrograman Web</h2>

                        <p class="text-secondary mb-0" style="line-height: 1.65;">
                            Latihan secara rutin dan membangun
                            proyek kecil dapat membantu meningkatkan
                            keterampilan pemrograman.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection