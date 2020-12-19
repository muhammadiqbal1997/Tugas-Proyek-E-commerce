<?php
include "../../../lib/koneksi.php";

$id_merek=$_GET['id'];
$sql = "DELETE FROM tbl_merek WHERE id_merek='$id_merek'";
$hapus=mysqli_query($koneksi, $sql);
if($hapus){
    echo "<script> alert ('Data Kategori Berhasil Dihapus'); window.location = '$adminUrl' + 'dashboard.php?module=merek';</script>";
}else{
    echo "<script> alert ('Data Kategori Gagal Dihapus'); window.location = '$adminUrl' + 'dashboard.php?module=merek';</script>";
}
?>