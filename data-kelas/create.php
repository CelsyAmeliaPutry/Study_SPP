<?php
    session_start();
    if($_SESSION['level']==""){
        header("location:auth-login-petugas.php?pesan=gagal");
    }
?>

<?php require('../template/header.php'); ?>

<?php require('../template/nav.php'); ?>

<?php require('../template/sidebar.php'); ?>

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Update Data Kelas </h1>
        </div>
        
        <div class="section-body">
            <div class="row d-flex justify-content-center">
                <div class="col-4">
                    <div class="card">
                        <div class="card-header">
                            <p class="h3">Update Data Kelas</p>
                        </div>
                        <form action="action-create.php" method="post">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="IdKelas" class="form-label">ID Kelas</label>
                                    <input type="text" class="form-control" id="IdKelas" name="IdKelas"
                                        >
                                </div>
                            
                                <div class="mb-3">
                                    <label for="NamaKelas" class="form-label">Nama Kelas</label>
                                    <input type="text" class="form-control" id="NamaKelas" name="NamaKelas"
                                        >
                                </div>
                                
                                <div class="mb-3">
                                    <label for="KompetensiKeahlian" class="form-label">Kompetensi Keahlian</label>
                                    <select class="form-control" aria-label="select" name="KompetensiKeahlian"
                                        id="KompetensiKeahlian">
                                        
                                        <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                                        <option value="Teknik Audio Video">Teknik Audio Video</option>
                                        <option value="Desain dan Pemodelan Informasi Bangunan">Desain dan Pemodelan Informasi Bangunan</option>
                                        <option value="Teknik Kendaraan Ringan Otomotif">Teknik Kendaraan Ringan Otomotif</option>
                                        <option value="Teknik dan Bisnis Sepeda Motor">Teknik dan Bisnis Sepeda Motor</option>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                        Tambah
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>