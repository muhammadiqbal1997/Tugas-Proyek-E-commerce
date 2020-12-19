<?php
include "../../../lib/koneksi.php";

$id_kurir=$_GET['id'];
$sql = "DELETE FROM tbl_kurir WHERE id_kurir='$id_kurir'";
$hapus=mysqli_query($koneksi, $sql);
if($hapus){
    echo "<script> alert ('Data Kategori Berhasil Dihapus'); window.location = '$adminUrl' + 'dashboard.php?module=kurir';</script>";
}else{
    echo "<script> alert ('Data Kategori Gagal Dihapus'); window.location = '$adminUrl' + 'dashboard.php?module=kurir';</script>";
}
?>