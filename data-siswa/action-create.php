<?php
if(isset($_POST)) {
    $NISN = $_POST['NISN'];
    $NIS = $_POST['NIS'];
    $Nama = $_POST['Nama'];
    $IdKelas = $_POST['IdKelas'];
    $Alamat = $_POST['Alamat'];
    $NoTelp = $_POST['NoTelp'];
    $IdSpp = $_POST['IdSpp'];

    include("../koneksi.php");
    $result = mysqli_query($koneksi, "INSERT INTO siswa(nisn,nis,nama,id_kelas,alamat,no_telp,id_spp) VALUES($NISN,'$NIS','$Nama','$IdKelas','$Alamat','$NoTelp','$IdSpp')");

    if ($result) {
        echo "<script>alert('Data Siswa berhasil ditambahkan'); window.location.href='read.php'</script>";
    }else{
        echo "<script>alert('Data Siswa gagal ditambahkan'); window.location.href='read.php'</script>";
    }
} else{
    header("location:create.php");
}
?>