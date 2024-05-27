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
            <h1>Update Data Petugas </h1>
        </div>
        
        <div class="section-body">
            <div class="row d-flex justify-content-center">
                <div class="col-4">
                    <div class="card">
                        <div class="card-header">
                            <p class="h3">Update Data Petugas</p>
                        </div>
                        <?php
                        include "../koneksi.php";
                        $IdPetugas = $_GET['id_petugas'];
                        $query_mysql = mysqli_query($koneksi, "SELECT * FROM petugas WHERE id_petugas=$IdPetugas");
                        $data = mysqli_fetch_array($query_mysql); { ?>
                        <form action="action-update.php" method="post">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="IdPetugas" class="form-label">ID Petugas</label>
                                    <input type="text" class="form-control" id="IdPetugas" name="IdPetugas"
                                        value="<?php echo $data['id_petugas']; ?>" readonly>
                                </div>

                                <div class="mb-3">
                                    <label for="Username" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="Username" name="Username"
                                        value="<?php echo $data['username']; ?>">
                                </div>

                                <div class="mb-3">
                                    <label for="Password" class="control-label"> Password</label>
                                    <input id="Password" type="Password" class="form-control" name="Password" tabindex="2" value="<?php echo $data['username']; ?>" required>
                                      
                                        <div class="d-block">
                                            <div class="float-right"></div>
                                        </div>
                                    
                                </div>
                            
                                <div class="mb-3">
                                    <label for="NamaPetugas" class="form-label">Nama Petugas</label>
                                    <input type="text" class="form-control" id="NamaPetugas" name="NamaPetugas"
                                        value="<?php echo $data['nama_petugas']; ?>">
                                </div>
                                
                                <div class="mb-3">
                                    <label for="Level" class="form-label">Level</label>
                                    <select class="form-control" aria-label="select" name="Level"
                                        id="Level">
                                        <option selected value="<?php echo $data['level']; ?>">
                                            <?php echo $data['level']; ?>
                                            <hr />
                                        </option>

                                        <option value="Admin">Admin</option>
                                        <option value="Petugas">Petugas</option>
                                        
                                    </select>
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