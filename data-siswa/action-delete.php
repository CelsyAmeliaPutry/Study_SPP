<?php
    include "../koneksi.php";
    $NISN = $_GET['nisn'];
    $query_mysql = mysqli_query($koneksi, "DELETE FROM siswa WHERE NISN=$NISN");
    if ($query_mysql) {
        echo "<script>alert('Data Kelas berhasil dihapus'); window.location.href='read.php'</script>";
    }else{
        echo "<script>alert('Data Kelas gagal dihapus'); window.location.href='read.php'</script>";
    }
?>