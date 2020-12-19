<?php
include "../../../lib/koneksi.php";

$id_kategori = $_POST['id_kategori']; 
$nama_kategori = $_POST['nama_kategori'];
if($nama_kategori==""){
    echo "<script> alert('Data Kategori Harus Diisi'); window.location = '$adminUrl' + 'dashboard.php?module=edit_kategori&id=' + '$id_kategori';</script>";
}else{
$sql = "UPDATE tbl_kategori SET nama_kategori='$nama_kategori' WHERE id_kategori='$id_kategori'";
$edit = mysqli_query($koneksi, $sql);

if($edit){
    echo "<script> alert('Data Kategori berhasil diubah'); window.location= '$adminUrl' + 'dashboard.php?module=kategori';</script>";
} else{
    echo "<script> alert('Data Kategori gagal diubah'); window.location= '$adminUrl' + 'dashboard.php?module=edit_kategori&id';</script>";
}
}
?>