<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">
    <title>Mahasiswa</title>
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm mb-5">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">Portal Mahasiswa</a>
            <button class="navbar-toggler" type="text/button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white-50" href="">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fw-semibold" href="<?= route_to('mahasiswa.profile', $mahasiswa['id']); ?>">Profil</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                
                <div class="card shadow border-0 rounded-4 text-center overflow-hidden">
                    <div class="bg-primary py-4"></div>
                    
                    <div class="card-body px-4 py-5 position-relative">
                        <div class="d-inline-flex align-items-center justify-content-center bg-light rounded-circle shadow-sm mb-4" style="width: 100px; height: 100px; margin-top: -80px;">
                            <span class="fs-1 text-primary fw-bold">
                                <?= strtoupper(substr(esc($mahasiswa['nama_lengkap']), 0, 1)); ?>
                            </span>
                        </div>

                        <h2 class="card-title fw-bold text-dark mb-1">
                            Hello, <?= esc($mahasiswa['nama_lengkap']); ?>!
                        </h2>
                        <p class="text-muted mb-4">Selamat datang di dashboard Anda.</p>
                        
                        <div class="bg-light rounded-3 p-3 mb-2">
                            <span class="d-block text-uppercase small fw-bold text-secondary tracking-wider">Nomor Induk Mahasiswa</span>
                            <span class="fs-5 fw-mono text-dark"><?= esc($mahasiswa['nim']); ?></span>
                        </div>
                    </div>
                    
                </div> </div>
        </div>
    </div>

</body>
</html>