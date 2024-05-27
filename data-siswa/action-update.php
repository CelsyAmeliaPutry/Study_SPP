<?php
if(isset($_POST)) {
    $Nisn = $_POST['Nisn'];
    $Nis = $_POST['Nis'];
    $Nama = $_POST['Nama'];
    $IdKelas = $_POST['IdKelas'];
    $Alamat = $_POST['Alamat'];
    $NoTelp = $_POST['NoTelp'];
    $IdSpp = $_POST['IdSpp'];

    include("../koneksi.php");
    $result = mysqli_query($koneksi, "UPDATE siswa SET nis='$Nis',nama='$Nama',id_kelas='$IdKelas',alamat='$Alamat',no_telp='$NoTelp',id_spp='$IdSpp' WHERE nisn='$Nisn' ");

    if ($result) {
        echo "<script>alert('Data Siswa berhasil diubah'); window.location.href='read.php'</script>";
    }else{
        echo "<script>alert('Data Siswa gagal diubah'); window.location.href='read.php'</script>";
    }
} else{
    header("location:create.php");
}
?>