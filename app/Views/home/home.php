<?= $this->extend('layouts/home_layout') ?>

<?= $this->section('head') ?>
<title>Home</title>
<link href="https://fonts.googleapis.com/css2?family=Lobster&family=Pacifico&display=swap" rel="stylesheet">
<style>
    body {
        height: 100vh;
        margin: 0;
        background: url('https://images.pexels.com/photos/256541/pexels-photo-256541.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260') no-repeat center center fixed;
        background-size: cover;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .custom-title {
        font-family: 'Lobster', cursive; /* Font untuk "Perpustakaan" */
        font-size: 3.8rem;
        color:rgb(110, 81, 61); /* oranye kemerahan */
        text-shadow: 1px 1px 3px rgba(0,0,0,0.1);
        margin-bottom: 0.15em;
        font-weight: 700;
    }
    .custom-subtitle {
        font-family: 'Pacifico', cursive; /* Font untuk "Borcess Knowledge Space" */
        font-size: 2.8rem;
        color: #e67e22;
        text-shadow: 1px 2px 4px rgba(0,0,0,0.15);
        display: inline-block;
        margin-left: 0.25em;
    }
    .logo {
    max-width: 150px;
    margin-bottom: 20px;
    border: none; /* Ini menegaskan bahwa tidak ada border */
    background: transparent; /* Untuk berjaga-jaga jika gambar tidak transparan */
}
    .content {
        background: rgba(247, 245, 245, 0.8); /* Background putih transparan untuk konten */
        padding: 2rem; /* Padding untuk konten */
        border-radius: 12px; /* Sudut membulat */
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); /* Bayangan untuk konten */
    }

    .btn-login {
    background-color: #6e513d; /* Cokelat tua */
    color: #fff;
    border: none;
}
.btn-login:hover {
    background-color: #5a412f;
}

.btn-daftar {
    color: #e67e22; /* Oranye */
    border: 2px solid #e67e22;
    background-color: transparent;
}
.btn-daftar:hover {
    background-color: #e67e22;
    color: #fff;
}

</style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="px-4 pt-5 my-5 text-center border-bottom content">
<img src="<?= base_url('assets/images/logo-smk.png'); ?>" alt="Logo SMK Taruna Terpadu 1" class="logo">
  <h1>
    <span class="custom-title">Perpustakaan</span>
    <span class="custom-subtitle"> Smk Taruna Terpadu 1</span>
  </h1>
  <div class="col-lg-6 mx-auto">
    <p class="lead mb-4">Ayo jelajahi dunia tanpa batas! Kunjungi Perpustakaan Borcess Ashokal Hajar dan temukan ilmu yang menginspirasi setiap langkahmu!</p>
    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
    <a href="<?= base_url('login'); ?>" class="btn btn-login btn-lg px-4 me-sm-3">Login petugas</a>
    <a href="<?= base_url('book'); ?>" class="btn btn-daftar btn-lg px-4">Daftar buku</a>

    </div>
  </div>
</div>
<?= $this->endSection() ?>