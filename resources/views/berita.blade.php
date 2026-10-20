
@extends('layouts.main')

@section('title', 'Berita - Portofolio M Ghiffari')

@section('content')
<section class="section-space">
    <div class="container">
        <h1 class="fw-bold">Berita dan Artikel</h1>

        <p class="text-secondary mb-4">
            Catatan seputar pemrograman dan teknologi informasi.
        </p>

        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body p-4">
                        <span class="badge text-bg-primary mb-3">
                            Laravel
                        </span>

                        <h2 class="h5">Mengenal Laravel 12</h2>

                        <p class="text-secondary">
                            Laravel adalah framework PHP yang
                            membantu pengembangan aplikasi web
                            dengan struktur yang terorganisasi.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body p-4">
                        <span class="badge text-bg-success mb-3">
                            Bootstrap
                        </span>

                        <h2 class="h5">Membuat Website Responsif</h2>

                        <p class="text-secondary">
                            Bootstrap menyediakan komponen dan
                            sistem grid untuk membuat tampilan
                            website yang menyesuaikan layar.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body p-4">
                        <span class="badge text-bg-warning mb-3">
                            Programming
                        </span>

                        <h2 class="h5">Belajar Pemrograman Web</h2>

                        <p class="text-secondary">
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
