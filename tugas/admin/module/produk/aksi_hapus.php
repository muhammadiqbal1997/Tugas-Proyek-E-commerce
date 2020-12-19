<?php
include "../../../lib/koneksi.php";

$id_produk=$_GET['id'];
$sql = "DELETE FROM tbl_produk WHERE id_produk='$id_produk'";
$hapus=mysqli_query($koneksi, $sql);
if($hapus){
    echo "<script> alert ('Data Kategori Berhasil Dihapus'); window.location = '$adminUrl' + 'dashboard.php?module=produk';</script>";
}else{
    echo "<script> alert ('Data Kategori Gagal Dihapus'); window.location = '$adminUrl' + 'dashboard.php?module=produk';</script>";
}
?>