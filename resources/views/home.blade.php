@section('content')

<div class="container mt-4">

    <h1>Teknologi Informasi</h1>

    <p>Selamat datang di website portofolio saya.</p>

</div>

@endsection

<section class="hero">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-7">
                <p class="text-primary fw-semibold mb-2">
                    HALO, SELAMAT DATANG!
                </p>

                <h1 class="display-4 fw-bold">
                    Saya M Ghiffari
                </h1>

                <h2 class="h3 mb-3">
                    Mahasiswa Teknologi Informasi
                </h2>

                <p class="lead text-secondary">
                    Saya tertarik dengan pengembangan website,
                    pemrograman, dan teknologi digital. Ini adalah
                    website portofolio saya.
                </p>

                <a href="{{ route('profile') }}" class="btn btn-primary btn-lg mt-3">
                    Lihat Profil
                </a>

                <a href="{{ route('berita') }}"
                   class="btn btn-outline-primary btn-lg mt-3">
                    Lihat Berita
                </a>
            </div>

            <div class="col-lg-5 text-center">
                <div class="bg-white rounded-4 shadow-sm p-5">
                    <div class="display-1">👨‍💻</div>
                    <h3 class="h4 mt-3">Web Developer</h3>
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
            <h2 class="fw-bold">Tentang Portofolio Ini</h2>
            <p class="text-secondary">
                Beberapa hal yang sedang saya pelajari.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body p-4">
                        <h3 class="h5">Pengembangan Web</h3>
                        <p class="text-secondary mb-0">
                            Membuat website menggunakan HTML,
                            CSS, Bootstrap, dan Laravel.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body p-4">
                        <h3 class="h5">Pemrograman</h3>
                        <p class="text-secondary mb-0">
                            Mempelajari logika pemrograman dan
                            pengembangan aplikasi.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body p-4">
                        <h3 class="h5">Teknologi Informasi</h3>
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
 
