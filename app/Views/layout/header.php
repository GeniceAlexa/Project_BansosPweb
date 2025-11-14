<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BANSOS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg fixed-top bg-body-tertiary">
        <div class="container-fluid ms-3 me-auto">
            <h1 class="navbar-brand">Bansosku</h1>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto text-center">
                    <li class="nav-item">
                        <a class="nav-link mx-3" href="#beranda">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-3" href="#alur">Alur</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-3" href="#jadwal">Jadwal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-3" href="#berita">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-3" href="/dokumentasi">Dokumentasi</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <button onclick="window.location.href='<?= base_url('login') ?>'" class="btn btn-outline-primary me-2" type="button">Masuk</button>
                    <button onclick="window.location.href='<?= base_url('register') ?>'" class="btn btn-outline-primary me-2" type="button">Daftar</button>
            </div>
        </div>
    </nav>

<?= $this->rendersection('content');?>
    