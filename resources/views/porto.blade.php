
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M Giffari | Portfolio</title>

    <style>
        :root {
            --bg: #0b1120;
            --card: #131e32;
            --primary: #8b5cf6;
            --blue: #60a5fa;
            --text: #f1f5f9;
            --muted: #a5b4cc;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
            scroll-padding-top: 85px;
        }

        body {
            font-family: Arial, sans-serif;
            background: var(--bg);
            color: var(--text);
            line-height: 1.7;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        .container {
            width: min(1100px, 90%);
            margin: auto;
        }

        header {
            position: sticky;
            top: 0;
            z-index: 10;
            background: rgba(11, 17, 32, .96);
            border-bottom: 1px solid #263248;
        }

        nav {
            min-height: 72px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
        }

        .logo {
            font-size: 24px;
            font-weight: 800;
        }

        .logo span {
            color: var(--primary);
        }

        .nav-links {
            display: flex;
            flex-wrap: wrap;
            gap: 24px;
            list-style: none;
        }

        .nav-links a {
            color: var(--muted);
            font-size: 14px;
            transition: color .2s;
        }

        .nav-links a:hover {
            color: #c4b5fd;
        }

        section {
            padding: 85px 0;
            scroll-margin-top: 70px;
        }

        .hero {
            min-height: 570px;
            display: flex;
            align-items: center;
            background:
                radial-gradient(ellipse at 10% 20%, #7c3aed20, transparent 50%),
                radial-gradient(ellipse at 90% 80%, #2563eb20, transparent 45%);
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 1.4fr 1fr;
            gap: 55px;
            align-items: center;
        }

        .eyebrow {
            color: #c4b5fd;
            font-size: 13px;
            font-weight: bold;
            letter-spacing: 2px;
        }

        h1 {
            font-size: clamp(38px, 6vw, 64px);
            line-height: 1.15;
            margin: 20px 0;
        }

        .gradient {
            background: linear-gradient(90deg, #a78bfa, #60a5fa);
            color: transparent;
            background-clip: text;
        }

        .subtitle {
            font-size: 22px;
            font-weight: 600;
        }

        .description {
            color: var(--muted);
            margin: 20px 0;
            max-width: 570px;
        }

        .buttons {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-top: 25px;
        }

        .btn {
            display: inline-block;
            padding: 12px 20px;
            border-radius: 9px;
            font-weight: bold;
            font-size: 14px;
            transition: transform .2s;
        }

        .btn:hover {
            transform: translateY(-3px);
        }

        .btn-primary {
            background: linear-gradient(90deg, #7c3aed, #4f46e5);
            color: white;
        }

        .btn-outline {
            border: 1px solid #475569;
        }

        .profile {
            min-height: 330px;
            border: 1px solid #55418a;
            border-radius: 28px;
            background: linear-gradient(145deg, #1e293b, #111827);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            text-align: center;
            animation: float 4s ease-in-out infinite;
        }

        .avatar {
            width: 125px;
            height: 125px;
            border-radius: 50%;
            background: linear-gradient(135deg, #8b5cf6, #60a5fa);
            display: grid;
            place-items: center;
            font-size: 45px;
            font-weight: bold;
            color: white;
            margin-bottom: 20px;
        }

        .profile p {
            color: var(--muted);
            font-size: 14px;
        }

        .section-heading {
            margin-bottom: 35px;
        }

        .section-heading h2 {
            font-size: clamp(28px, 4vw, 40px);
            margin: 10px 0;
        }

        .section-heading p {
            color: var(--muted);
            max-width: 600px;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 22px;
        }

        .card {
            background: var(--card);
            border: 1px solid #263248;
            border-radius: 16px;
            padding: 25px;
            transition: transform .25s, border-color .25s;
        }

        .card:hover {
            transform: translateY(-6px);
            border-color: var(--primary);
        }

        .card-icon {
            color: #a78bfa;
            font-size: 30px;
            margin-bottom: 12px;
        }

        .card h3 {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .card p {
            color: var(--muted);
            font-size: 14px;
        }

        .muted-section {
            background: #0e1729;
        }

        .skill {
            margin-bottom: 22px;
        }

        .skill-info {
            display: flex;
            justify-content: space-between;
            margin-bottom: 8px;
            font-size: 14px;
        }

        .bar {
            height: 8px;
            border-radius: 20px;
            background: #29364d;
            overflow: hidden;
        }

        .bar span {
            display: block;
            height: 100%;
            background: linear-gradient(90deg, #8b5cf6, #60a5fa);
            border-radius: inherit;
        }

        .project-type {
            color: #c4b5fd;
            font-size: 12px;
            margin-bottom: 8px;
            display: inline-block;
        }

        .contact {
            text-align: center;
        }

        .contact .section-heading p {
            margin: auto;
        }

        footer {
            padding: 25px 0;
            border-top: 1px solid #263248;
            color: var(--muted);
            font-size: 13px;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-9px); }
        }

        @media (max-width: 800px) {
            .hero-grid {
                grid-template-columns: 1fr;
                gap: 35px;
            }

            .profile {
                min-height: 260px;
            }

            .grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .nav-links {
                gap: 12px;
            }
        }

        @media (max-width: 540px) {
            nav {
                padding: 15px 0;
                align-items: flex-start;
                flex-direction: column;
            }

            .nav-links {
                gap: 10px 17px;
            }

            .nav-links a {
                font-size: 12px;
            }

            section {
                padding: 60px 0;
            }

            .hero {
                min-height: auto;
            }

            .grid {
                grid-template-columns: 1fr;
            }

            .footer-content {
                flex-direction: column;
                text-align: center;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            *, *::before, *::after {
                animation: none !important;
                scroll-behavior: auto !important;
                transition: none !important;
            }
        }
    </style>
</head>
<body>

    <header>
        <nav class="container">
            <a href="#home" class="logo">M<span>.</span> Giffari</a>

            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">Tentang</a></li>
                <li><a href="#skills">Keahlian</a></li>
                <li><a href="#projects">Proyek</a></li>
                <li><a href="#contact">Kontak</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="hero" id="home">
            <div class="container hero-grid">
                <div>
                    <span class="eyebrow">HALO, SELAMAT DATANG!</span>

                    <h1>Saya <span class="gradient">M Giffari</span></h1>

                    <p class="subtitle">Mahasiswa Teknologi Informasi</p>

                    <p class="description">
                        Saya tertarik dengan pengembangan website,
                        pemrograman, dan teknologi digital.
                        Saya terus belajar, berkarya, dan berkembang
                        untuk menciptakan solusi digital.
                    </p>

                    <div class="buttons">
                        <a href="#projects" class="btn btn-primary">
                            Lihat Proyek ↗
                        </a>
                        <a href="#contact" class="btn btn-outline">
                            Hubungi Saya
                        </a>
                    </div>
                </div>

                <div class="profile">
                    <div class="avatar">MG</div>
                    <h2>M Giffari</h2>
                    <p>Web Developer | Laravel Enthusiast</p>
                </div>
            </div>
        </section>

        <section id="about">
            <div class="container">
                <div class="section-heading">
                    <span class="eyebrow">KENALI SAYA</span>
                    <h2>Tentang Saya</h2>
                    <p>
                        Mahasiswa Teknologi Informasi yang senang
                        mempelajari pemrograman, membangun website,
                        dan mengeksplorasi teknologi baru.
                    </p>
                </div>

                <div class="grid">
                    <article class="card">
                        <div class="card-icon">⌘</div>
                        <h3>Pengembangan Web</h3>
                        <p>Membangun website yang modern, menarik, dan responsif.</p>
                    </article>

                    <article class="card">
                        <div class="card-icon">&lt;/&gt;</div>
                        <h3>Pemrograman</h3>
                        <p>Mempelajari logika pemrograman dan pengembangan aplikasi.</p>
                    </article>

                    <article class="card">
                        <div class="card-icon">✧</div>
                        <h3>Teknologi Informasi</h3>
                        <p>Mengembangkan pengetahuan dan keterampilan teknologi.</p>
                    </article>
                </div>
            </div>
        </section>

        <section id="skills" class="muted-section">
            <div class="container">
                <div class="section-heading">
                    <span class="eyebrow">KEMAMPUAN SAYA</span>
                    <h2>Keahlian</h2>
                    <p>Teknologi yang sedang saya pelajari dan kembangkan.</p>
                </div>

                <div class="grid">
                    <div class="card">
                        @foreach ([
                            ['HTML & CSS', 85],
                            ['PHP & Laravel', 70],
                            ['Database', 75],
                            ['JavaScript', 60],
                            ['UI Design', 65]
                        ] as $skill)
                            <div class="skill">
                                <div class="skill-info">
                                    <span>{{ $skill[0] }}</span>
                                    <span>{{ $skill[1] }}%</span>
                                </div>
                                <div class="bar">
                                    <span style="width: {{ $skill[1] }}%"></span>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="card">
                        <h3>Fokus Pengembangan</h3>
                        <p>
                            Memperkuat dasar pemrograman, memahami
                            arsitektur Laravel, mempelajari database,
                            dan membuat aplikasi web yang mudah digunakan.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="projects">
            <div class="container">
                <div class="section-heading">
                    <span class="eyebrow">KARYA PILIHAN</span>
                    <h2>Proyek Saya</h2>
                    <p>Contoh proyek yang dapat kamu sesuaikan dengan karya nyata.</p>
                </div>

                <div class="grid">
                    @foreach ([
                        [
                            'Website Portofolio',
                            'Web Development',
                            'Website personal untuk menampilkan profil dan karya.'
                        ],
                        [
                            'Sistem Informasi',
                            'Laravel',
                            'Aplikasi pengelolaan data berbasis web.'
                        ],
                        [
                            'Landing Page',
                            'Web Design',
                            'Halaman web dengan desain modern dan responsif.'
                        ]
                    ] as $project)
                        <article class="card">
                            <div class="card-icon">▧</div>
                            <span class="project-type">{{ $project[1] }}</span>
                            <h3>{{ $project[0] }}</h3>
                            <p>{{ $project[2] }}</p>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        <section id="contact" class="muted-section contact">
            <div class="container">
                <div class="section-heading">
                    <span class="eyebrow">MARI TERHUBUNG</span>
                    <h2>Punya Ide Menarik?</h2>
                    <p>
                        Mari berdiskusi dan berkolaborasi dalam
                        proyek teknologi yang menarik.
                    </p>
                </div>

                <a href="mailto:emailkamu@example.com"
                   class="btn btn-primary">
                    Hubungi Saya ↗
                </a>
            </div>
        </section>
    </main>

    <footer>
        <div class="container footer-content">
            <a href="#home" class="logo">M<span>.</span> Giffari</a>
            <p>&copy; {{ date('Y') }} M Giffari. Dibuat dengan Laravel.</p>
            <a href="#home">Kembali ke atas ↑</a>
        </div>
    </footer>

</body>
</html>
