<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Desa - Desa Sukamaju</title>
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

            <h2>Profil Desa Sukamaju</h2>

            <div class="card">
                <h3>Tentang Desa Sukamaju</h3>

                <p>
                    Desa Sukamaju merupakan salah satu desa yang memiliki
                    berbagai potensi dan sumber daya yang dapat dikembangkan
                    untuk meningkatkan kesejahteraan masyarakat.
                </p>

                <p>
                    Website ini menyediakan informasi mengenai profil,
                    potensi, berita, dan berbagai informasi mengenai
                    Desa Sukamaju.
                </p>
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