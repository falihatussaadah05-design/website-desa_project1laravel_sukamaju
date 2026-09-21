<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita - Desa Sukamaju</title>
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
    <section class="content">
        <div class="container">

            <h2>Berita Desa</h2>

            <div class="cards">

                <div class="card">
                    <h3>Kegiatan Desa Sukamaju</h3>
                    <p>
                        Informasi mengenai kegiatan dan program
                        yang dilaksanakan di Desa Sukamaju.
                    </p>
                </div>

                <div class="card">
                    <h3>Kegiatan Masyarakat</h3>
                    <p>
                        Berbagai kegiatan masyarakat Desa Sukamaju
                        dalam membangun lingkungan desa.
                    </p>
                </div>

                <div class="card">
                    <h3>Informasi Terbaru</h3>
                    <p>
                        Informasi terbaru mengenai pelayanan dan
                        kegiatan Desa Sukamaju.
                    </p>
                </div>

            </div>

        </div>
    </section>
</main>

<footer>
    <div class="container">
        <p>© {{ date('Y') }} Desa Sukamaju. Semua Hak Dilindungi.</p>
    </div>
</footer>

</body>
</html>