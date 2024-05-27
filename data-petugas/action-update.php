<?php
if(isset($_POST)) {
    $IdPetugas = $_POST['IdPetugas'];
    $Username = $_POST['Username'];
    $Password = md5($_POST['Password']);
    $NamaPetugas = $_POST['NamaPetugas'];
    $Level = $_POST['Level'];

    include("../koneksi.php");
    $result = mysqli_query($koneksi, "UPDATE petugas SET username='$Username',password='$Password',nama_petugas='$NamaPetugas',level='$Level' WHERE id_petugas='$IdPetugas' ");

    if ($result) {
        echo "<script>alert('Data Petugas berhasil diubah'); window.location.href='read.php'</script>";
    }else{
        echo "<script>alert('Data Petugas gagal diubah'); window.location.href='read.php'</script>";
    }
} else{
    header("location:create.php");
}
?>