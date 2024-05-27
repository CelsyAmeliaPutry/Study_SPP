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
            <h1>Update Data SPP </h1>
        </div>
        
        <div class="section-body">
            <div class="row d-flex justify-content-center">
                <div class="col-4">
                    <div class="card">
                        <div class="card-header">
                            <p class="h3">Update Data SPP</p>
                        </div>
                        <form action="action-create.php" method="post">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="IdSpp" class="form-label">Id SPP</label>
                                    <input type="text" class="form-control" id="IdSpp" name="IdSpp"
                                        >
                                </div>
                            
                                <div class="mb-3">
                                    <label for="Nominal" class="form-label"> Nominal</label>
                                    <input type="text" class="form-control" id="Nominal" name="Nominal"
                                        >
                                </div>


                                <div class="mb-3">
                                    <label for="Tahun" class="form-label"> Tahun</label>
                                    <input type="text" class="form-control" id="Tahun" name="Tahun"
                                        >
                                </div>
                                
                                <div class="mb-3">
                                    <label for="Keterangan" class="form-label"> Keterangan</label>
                                    <input type="text" class="form-control" id="Keterangan" name="Keterangan"
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