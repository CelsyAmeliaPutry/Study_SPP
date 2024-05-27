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
                        <?php
                        include "../koneksi.php";
                        $Nisn = $_GET['nisn'];
                        $query_mysql = mysqli_query($koneksi, "SELECT * FROM siswa WHERE nisn=$Nisn");
                        $data = mysqli_fetch_array($query_mysql); { ?>
                        <form action="action-update.php" method="post">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="Nisn" class="form-label">NISN</label>
                                    <input type="text" class="form-control" id="Nisn" name="Nisn"
                                        value="<?php echo $data['nisn']; ?>" readonly>
                                </div>
                            
                                <div class="mb-3">
                                    <label for="Nis" class="form-label">NIS</label>
                                    <input type="text" class="form-control" id="Nis" name="Nis"
                                        value="<?php echo $data['nis']; ?>">
                                </div>
                                
                                <div class="mb-3">
                                    <label for="Nama" class="form-label">Nama</label>
                                    <input type="text" class="form-control" id="Nis" name="Nis"
                                        value="<?php echo $data['nama']; ?>">
                                </div>

                                <div class="mb-3">
                                    <label for="IdKelas" class="form-label">Id Kelas</label>
                                    <input type="text" class="form-control" id="Nis" name="Nis"
                                        value="<?php echo $data['id_kelas']; ?>">
                                </div>

                                <div class="mb-3">
                                    <label for="Alamat" class="form-label">Alamat</label>
                                    <input type="text" class="form-control" id="Nis" name="Nis"
                                        value="<?php echo $data['alamat']; ?>">
                                </div>

                                <div class="mb-3">
                                    <label for="NoTelp" class="form-label">No Telp</label>
                                    <input type="text" class="form-control" id="Nis" name="Nis"
                                        value="<?php echo $data['no_telp']; ?>">
                                </div>

                                <div class="mb-3">
                                    <label for="IdSpp" class="form-label">Id SPP</label>
                                    <input type="text" class="form-control" id="Nis" name="Nis"
                                        value="<?php echo $data['id_spp']; ?>">
                                </div>
                                
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                    Update
                                </button>
                            </div>
                            <?php } ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>