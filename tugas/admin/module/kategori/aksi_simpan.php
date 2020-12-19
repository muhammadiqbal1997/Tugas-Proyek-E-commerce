<?php 
include "../../../lib/koneksi.php";
$nama_kategori =$_POST['nama_kategori'];
if($nama_kategori==""){
    echo "<script> alert('Data Kategori Harus Diisi'); window.location = '$adminUrl' + 'dashboard.php?module=tambah_kategori';</script>";
}else{
$sql = "INSERT INTO tbl_kategori (nama_kategori) VALUES ('$nama_kategori')";
$simpan= mysqli_query ($koneksi, $sql);
if($simpan){
    echo "<script> alert('Data Kategori berhasil masuk'); window.location = '$adminUrl' + 'dashboard.php?module=kategori';</script>";
    } else {
        echo "<script> alert('Data Kategori gagal masuk'); window.location = '$adminUrl' + 'dashboard.php?module=tambah_kategori';</script>";
    }
}
?>