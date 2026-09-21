<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Potensi Desa - Desa Sukamaju</title>
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

            <h2>Potensi Desa</h2>

            <div class="cards">

                <div class="card">
                    <h3>Pertanian</h3>
                    <p>
                        Potensi pertanian menjadi salah satu sumber
                        penghasilan masyarakat Desa Sukamaju.
                    </p>
                </div>

                <div class="card">
                    <h3>UMKM</h3>
                    <p>
                        Berbagai usaha masyarakat dapat dikembangkan
                        menjadi produk unggulan desa.
                    </p>
                </div>

                <div class="card">
                    <h3>Wisata</h3>
                    <p>
                        Potensi wisata desa dapat menjadi salah satu
                        daya tarik bagi masyarakat dan pengunjung.
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