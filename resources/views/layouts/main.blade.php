<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Portofolio M Ghiffari')</title>

    <!-- Bootstrap CSS -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <style>
        body {
            background: #f5f8fc;
            color: #172b4d;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .navbar {
            background: white;
        }

        .hero {
            background: linear-gradient(135deg, #eaf3ff, #ffffff);
            padding: 90px 0;
        }

        .section-space {
            padding: 60px 0;
        }

        .card {
            border: 1px solid #e5eaf1;
            border-radius: 14px;
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.08);
        }

        .btn-primary {
            background: #2478f2;
            border-color: #2478f2;
        }

        .btn-primary:hover {
            background: #155fc7;
        }

        main {
            flex: 1;
        }

        footer {
            background: white;
            padding: 22px 0;
            margin-top: 40px;
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg border-bottom sticky-top">

        <div class="container">

            <a class="navbar-brand fw-bold"
               href="{{ route('home') }}">
                Portofolio
            </a>

            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarMenu"
                aria-controls="navbarMenu"
                aria-expanded="false"
                aria-label="Buka navigasi">

                <span class="navbar-toggler-icon"></span>

            </button>

            <div class="collapse navbar-collapse" id="navbarMenu">

                <ul class="navbar-nav ms-auto gap-lg-2">

                    <li class="nav-item">
                        <a
                            class="nav-link {{ request()->routeIs('home') ? 'active fw-bold' : '' }}"
                            href="{{ route('home') }}">
                            Home
                        </a>
                    </li>

                    <li class="nav-item">
                        <a
                            class="nav-link {{ request()->routeIs('profile') ? 'active fw-bold' : '' }}"
                            href="{{ route('profile') }}">
                            Profile
                        </a>
                    </li>

                    <li class="nav-item">
                        <a
                            class="nav-link {{ request()->routeIs('berita') ? 'active fw-bold' : '' }}"
                            href="{{ route('berita') }}">
                            Berita
                        </a>
                    </li>

                </ul>

            </div>

        </div>

    </nav>


    <!-- KONTEN UTAMA -->
    <main>

        @yield('content')

    </main>


    <!-- FOOTER -->
    <footer class="border-top text-center">

        <div class="container">

            <small class="text-secondary">

                &copy; {{ date('Y') }}
                M Ghiffari.
                All rights reserved.

            </small>

        </div>

    </footer>


    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>