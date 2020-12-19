<?php
include "../../../lib/koneksi.php";

$id_kota = $_POST['id_kota']; 
$nama_kota = $_POST['nama_kota'];
if($nama_kota==""){
    echo "<script> alert('Data Kota Harus Diisi'); window.location = '$adminUrl' + 'dashboard.php?module=edit_kota&id=' + '$id_kota';</script>";
}else{
$sql = "UPDATE tbl_kota SET nama_kota='$nama_kota' WHERE id_kota='$id_kota'";
$edit = mysqli_query($koneksi, $sql);

if($edit){
    echo "<script> alert('Data Kategori berhasil diubah'); window.location= '$adminUrl' + 'dashboard.php?module=kota';</script>";
} else{
    echo "<script> alert('Data Kategori gagal diubah'); window.location= '$adminUrl' + 'dashboard.php?module=edit_kota&id';</script>";
}
}
?>