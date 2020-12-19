<?php
include "../../../lib/koneksi.php";

$id_kota=$_GET['id'];
$sql = "DELETE FROM tbl_kota WHERE id_kota='$id_kota'";
$hapus=mysqli_query($koneksi, $sql);
if($hapus){
    echo "<script> alert ('Data Kategori Berhasil Dihapus'); window.location = '$adminUrl' + 'dashboard.php?module=kota';</script>";
}else{
    echo "<script> alert ('Data Kategori Gagal Dihapus'); window.location = '$adminUrl' + 'dashboard.php?module=kota';</script>";
}
?>