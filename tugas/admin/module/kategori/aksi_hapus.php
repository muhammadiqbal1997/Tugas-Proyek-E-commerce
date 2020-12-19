<?php
include "../../../lib/koneksi.php";

$id_kategori=$_GET['id'];
$sql = "DELETE FROM tbl_kategori WHERE id_kategori='$id_kategori'";
$hapus=mysqli_query($koneksi, $sql);
if($hapus){
    echo "<script> alert ('Data Kategori Berhasil Dihapus'); window.location = '$adminUrl' + 'dashboard.php?module=kategori';</script>";
}else{
    echo "<script> alert ('Data Kategori Gagal Dihapus'); window.location = '$adminUrl' + 'dashboard.php?module=kategori';</script>";
}
?>