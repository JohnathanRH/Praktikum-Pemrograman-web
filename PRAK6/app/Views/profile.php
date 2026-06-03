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
                        <a class="nav-link text-white-50" href="">Profil</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mb-5">
        <div class="row g-4">
            
            <div class="col-md-4 col-lg-3">
                <div class="text-center text-md-start">
                    <div class="d-inline-flex mb-3" style="width: 140px; height: 140px; overflow: hidden;">
                        <img src="<?= base_url('uploads/' . $mahasiswa['profile_pic']); ?>" 
                             alt="Profile Picture" 
                             class="rounded-circle img-thumbnail shadow-sm w-100 h-100" 
                             style="object-fit: cover;">
                    </div>
                    
                    <h2 class="fw-bold text-dark mb-3"><?= esc($mahasiswa['nama_lengkap']); ?></h2>
                    
                    <div class="bg-white p-3 rounded-3 shadow-sm border">
                        <p class="mb-2"><strong>NIM:</strong> <br><span class="text-muted"><?= esc($mahasiswa['nim']); ?></span></p>
                        <p class="mb-2"><strong>Asal Prodi:</strong> <br><span class="text-muted"><?= esc($mahasiswa['asal_prodi']); ?></span></p>
                        <p class="mb-2"><strong>Hobi:</strong> <br><span class="text-muted"><?= esc($mahasiswa['hobi']); ?></span></p>
                        <p class="mb-0"><strong>Skill:</strong> <br><span class="text-muted"><?= esc($mahasiswa['skill']) ?></span></p>
                    </div>
                </div>
            </div>

            <div class="col-md-8 col-lg-9">
                <h3 class="fw-bold text-dark mb-4">Pengalaman Detail</h3>
                
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-3">
                    <?php foreach($pengalamans as $pengalaman): ?>
                    <div class="col">
                        <div class="card h-100 shadow-sm border-0 rounded-3 overflow-hidden">
                            <img src="<?= base_url('uploads/' . esc($pengalaman['gambar'])) ?>" class="card-img-top" alt="Thumbnail Pengalaman" style="height: 160px; object-fit: cover;">
                            <div class="card-body d-flex flex-column justify-content-between">
                                <h5 class="card-title fw-semibold text-dark mb-3"><?= esc($pengalaman['judul']) ?></h5>
                                <a href="<?= route_to('pengalaman.detail', $pengalaman['id']) ?>" class="btn btn-outline-primary btn-sm w-100 stretched-link">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                
            </div>

        </div>
    </div>

</body>
</html>