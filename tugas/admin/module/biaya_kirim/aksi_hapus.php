<?php
include "../../../lib/koneksi.php";

$id_biaya_kirim=$_GET['id'];
$sql = "DELETE FROM tbl_biaya_kirim WHERE id_biaya_kirim='$id_biaya_kirim'";
$hapus=mysqli_query($koneksi, $sql);

if($hapus){
    echo "<script> alert ('Data Kategori Berhasil Dihapus'); window.location = '$adminUrl' + 'dashboard.php?module=biaya';</script>";
}else{
    echo "<script> alert ('Data Kategori Gagal Dihapus'); window.location = '$adminUrl' + 'dashboard.php?module=biaya';</script>";
}
?>