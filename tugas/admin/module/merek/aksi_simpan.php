<?php 
include "../../../lib/koneksi.php";
$nama_merek =$_POST['nama_merek'];
if($nama_merek==""){
    echo "<script> alert('Data Merek Harus Diisi'); window.location = '$adminUrl' + 'dashboard.php?module=tambah_merek';</script>";
}else{
$sql = "INSERT INTO tbl_merek (nama_merek) VALUES ('$nama_merek')";
$simpan= mysqli_query ($koneksi, $sql);
if($simpan){
    echo "<script> alert('Data Kategori berhasil masuk'); window.location = '$adminUrl' + 'dashboard.php?module=merek';</script>";
    } else {
        echo "<script> alert('Data Kategori gagal masuk'); window.location = '$adminUrl' + 'dashboard.php?module=tambah_merek';</script>";
    }
}
?>