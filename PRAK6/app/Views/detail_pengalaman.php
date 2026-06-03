<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">
    <title>Profile Mahasiswa</title>
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm mb-5">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">Portal Mahasiswa</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active fw-semibold" href="<?= route_to('home'); ?>">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fw-semibold" href="<?= route_to('mahasiswa.profile', $pengalaman['id_mahasiswa']); ?>">Profil</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mb-5">
        <div class="row g-4 align-items-start">
            
            <div class="col-md-4 col-lg-3">
                <div class="text-center text-md-start">
                    <h2 class="fw-bold text-dark mb-3"><?= esc($pengalaman['judul']); ?></h2>
                    
                    <div class="bg-white p-4 rounded-4 shadow-sm border-0">
                        <div class="mb-3">
                            <label class="text-muted small d-block mb-1">Waktu Pelaksanaan</label>
                            <span class="fw-semibold text-dark"><?= esc($pengalaman['waktu']) ?></span>
                        </div>
                        <hr class="text-muted my-3 opacity-25">
                        <div>
                            <label class="text-muted small d-block mb-1">Deskripsi</label>
                            <p class="text-secondary mb-0 style="line-height: 1.6;"><?= esc($pengalaman['deskripsi']) ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-8 col-lg-9">
                <h4 class="fw-bold text-dark mb-4">Dokumentasi Kegiatan</h4>
                
                <div class="shadow-sm border rounded-4 overflow-hidden bg-white p-2">
                    <img src="<?= base_url('uploads/' . $pengalaman['gambar']); ?>" 
                         alt="<?= esc($pengalaman['judul']); ?>" 
                         class="img-fluid w-100 rounded-3"
                         style="max-height: 550px; object-fit: cover; object-position: center;">
                </div>
            </div>

        </div>
    </div>

</body>
</html>