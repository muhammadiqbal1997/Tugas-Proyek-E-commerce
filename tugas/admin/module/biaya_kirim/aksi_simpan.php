<?php 
include "../../../lib/koneksi.php";
$id_kota = $_POST['id_kota'];
$id_kurir = $_POST['id_kurir'];
$biaya = $_POST['biaya'];
if($biaya==""){
    echo "<script> alert('Data Biaya Harus Diisi'); window.location = '$adminUrl' + 'dashboard.php?module=tambah_biaya';</script>";
}else{
$sql = "INSERT INTO tbl_biaya_kirim (id_kota, id_kurir, biaya) VALUES ('$id_kota', '$id_kurir', '$biaya')";
$simpan= mysqli_query ($koneksi, $sql);
if($simpan){
    echo "<script> alert('Data Kategori berhasil masuk'); window.location = '$adminUrl' + 'dashboard.php?module=biaya';</script>";
    } else {
        echo "<script> alert('Data Kategori gagal masuk'); window.location = '$adminUrl' + 'dashboard.php?module=tambah_biaya';</script>";
    }
}
?>