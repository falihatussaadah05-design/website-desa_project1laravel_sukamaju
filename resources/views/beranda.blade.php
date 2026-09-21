<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Desa Sukamaju</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <header class="header">
        <div class="container header-content">

            <div class="logo">
                <h1>Desa Sukamaju</h1>
                <span>Kabupaten Banyumas</span>
            </div>

            <nav>
                <a href="/">Beranda</a>
                <a href="/profil">Profil</a>
                <a href="/potensi-desa">Potensi Desa</a>
                <a href="/berita">Berita</a>
                <a href="/kontak">Kontak</a>
            </nav>

        </div>
    </header>

    <main>

        <section class="hero">
            <div class="container">

                <h2>Selamat Datang di Desa Sukamaju</h2>

                <p>
                    Website resmi Desa Sukamaju yang menyajikan
                    informasi, pelayanan, berita, dan potensi desa.
                </p>

                <a href="/profil" class="btn">
                    Selengkapnya
                </a>

            </div>
        </section>

        <section class="content">
            <div class="container">

                <h2>Informasi Desa</h2>

                <div class="cards">

                    <div class="card">
                        <h3>Profil Desa</h3>
                        <p>
                            Mengenal sejarah, pemerintahan, dan informasi
                            Desa Sukamaju.
                        </p>
                        <a href="/profil">Lihat Profil →</a>
                    </div>

                    <div class="card">
                        <h3>Potensi Desa</h3>
                        <p>
                            Berbagai potensi dan sumber daya yang dimiliki
                            Desa Sukamaju.
                        </p>
                        <a href="/potensi-desa">Lihat Potensi →</a>
                    </div>

                    <div class="card">
                        <h3>Berita</h3>
                        <p>
                            Informasi dan berita terbaru dari Desa Sukamaju.
                        </p>
                        <a href="/berita">Lihat Berita →</a>
                    </div>

                </div>

            </div>
        </section>

    </main>

    <footer>
        <div class="container">
            <p>
                © {{ date('Y') }} Desa Sukamaju. Semua Hak Dilindungi.
            </p>
        </div>
    </footer>

</body>
</html>