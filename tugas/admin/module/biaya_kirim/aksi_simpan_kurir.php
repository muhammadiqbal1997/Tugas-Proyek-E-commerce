<?php 
include "../../../lib/koneksi.php";
$nama_kurir =$_POST['nama_kurir'];
if($nama_kurir==""){
    echo "<script> alert('Data Kurir Harus Diisi'); window.location = '$adminUrl' + 'dashboard.php?module=tambah_kurir';</script>";
}else{
$sql = "INSERT INTO tbl_kurir (nama_kurir) VALUES ('$nama_kurir')";
$simpan= mysqli_query ($koneksi, $sql);
if($simpan){
    echo "<script> alert('Data Kategori berhasil masuk'); window.location = '$adminUrl' + 'dashboard.php?module=kurir';</script>";
    } else {
        echo "<script> alert('Data Kategori gagal masuk'); window.location = '$adminUrl' + 'dashboard.php?module=tambah_kurir';</script>";
    }
}
?>