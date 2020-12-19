<?php
include "../../../lib/koneksi.php";

$id_biaya_kirim = $_POST['id_biaya_kirim']; 
$id_kota = $_POST['id_kota']; 
$id_kurir = $_POST['id_kurir'];
$biaya = $_POST['biaya'];
if($biaya==""){
    echo "<script> alert('Data Biaya Harus Diisi'); window.location = '$adminUrl' + 'dashboard.php?module=edit_biaya&id=' + '$id_biaya_kirim';</script>";
}else{

$sql = "UPDATE tbl_biaya_kirim SET id_kota ='$id_kota', id_kurir ='$id_kurir', biaya ='$biaya' WHERE id_biaya_kirim ='$id_biaya_kirim'";
$edit = mysqli_query($koneksi, $sql);

if($edit){
    echo "<script> alert('Data Kategori berhasil diubah'); window.location= '$adminUrl' + 'dashboard.php?module=biaya';</script>";
} else{
    echo "<script> alert('Data Kategori gagal diubah'); window.location= '$adminUrl' + 'dashboard.php?module=edit_biaya&id';</script>";
}
}

?>