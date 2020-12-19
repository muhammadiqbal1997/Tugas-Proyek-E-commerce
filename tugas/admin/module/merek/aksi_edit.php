<?php
include "../../../lib/koneksi.php";

$id_merek = $_POST['id_merek']; 
$nama_merek = $_POST['nama_merek'];
if($nama_merek==""){
    echo "<script> alert('Data Merek Harus Diisi'); window.location = '$adminUrl' + 'dashboard.php?module=edit_merek&id=' + '$id_merek';</script>";
}else{
$sql = "UPDATE tbl_merek SET nama_merek='$nama_merek' WHERE id_merek='$id_merek'";
$edit = mysqli_query($koneksi, $sql);

if($edit){
    echo "<script> alert('Data Kategori berhasil diubah'); window.location= '$adminUrl' + 'dashboard.php?module=merek';</script>";
} else{
    echo "<script> alert('Data Kategori gagal diubah'); window.location= '$adminUrl' + 'dashboard.php?module=edit_merek&id';</script>";
}
}

?>