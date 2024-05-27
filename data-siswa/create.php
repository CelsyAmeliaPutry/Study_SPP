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
            <h1>Update Data Siswa </h1>
        </div>
        
        <div class="section-body">
            <div class="row d-flex justify-content-center">
                <div class="col-4">
                    <div class="card">
                        <div class="card-header">
                            <p class="h3">Update Data Siswa</p>
                        </div>
                        <form action="action-create.php" method="post">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="NISN" class="form-label">NISN</label>
                                    <input type="text" class="form-control" id="NISN" name="NISN"
                                        >
                                </div>
                            
                                <div class="mb-3">
                                    <label for="NIS" class="form-label"> NIS</label>
                                    <input type="text" class="form-control" id="NIS" name="NIS"
                                        >
                                </div>


                                <div class="mb-3">
                                    <label for="Nama" class="form-label"> Nama</label>
                                    <input type="text" class="form-control" id="Nama" name="Nama"
                                        >
                                </div>
                                
                                <div class="mb-3">
                                    <label for="IdKelas" class="form-label"> Id Kelas</label>
                                    <input type="text" class="form-control" id="IdKelas" name="IdKelas"
                                        >
                                </div>

                                <div class="mb-3">
                                    <label for="Alamat" class="form-label"> Alamat</label>
                                    <input type="text" class="form-control" id="Alamat" name="Alamat"
                                        >
                                </div>

                                <div class="mb-3">
                                    <label for="NoTelp" class="form-label"> No Telp</label>
                                    <input type="text" class="form-control" id="NoTelp" name="NoTelp"
                                        >
                                </div>

                                <div class="mb-3">
                                    <label for="IdSpp" class="form-label"> Id SPP</label>
                                    <input type="text" class="form-control" id="IdSpp" name="IdSpp"
                                        >
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