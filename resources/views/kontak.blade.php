<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak - Desa Sukamaju</title>
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

            <h2>Kontak Desa Sukamaju</h2>

            <div class="card">
                <h3>Informasi Kontak</h3>

                <p>
                    <strong>Alamat:</strong><br>
                    Desa Sukamaju, Kabupaten Banyumas
                </p>

                <p>
                    <strong>Telepon:</strong><br>
                    08XX-XXXX-XXXX
                </p>

                <p>
                    <strong>Email:</strong><br>
                    desasukamaju@email.com
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