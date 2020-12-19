<?php 
include "../../../lib/koneksi.php";


$nama_file = $_FILES['gambar'] ['name'];
$ukuran_file = $_FILES['gambar'] ['size'];
$tipe_file = $_FILES ['gambar'] ['type'];
$tmp_file = $_FILES ['gambar'] ['tmp_name'];

$nama_produk = $_POST['nama_produk'];
$id_kategori = $_POST['id_kategori'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];
$deskripsi = $_POST['deskripsi'];

$path = "../../upload/". $nama_file;

if ($tipe_file == "image/jpeg" || $tipe_file == "img/png"){
    if ($ukuran_file <=1000000){
        if (move_uploaded_file($tmp_file, $path)){
      
            $simpan = mysqli_query ($koneksi, "INSERT INTO tbl_produk (id_kategori, nama_produk, deskripsi, harga, gambar, jumlah) VALUES ('$id_kategori', '$nama_produk', '$deskripsi', '$harga', '$nama_file', '$jumlah')");
            if ($simpan) {
                echo "<script> alert ('Data Produk Berhasil Masuk'); window.location ='$adminUrl'+ 'dashboard.php?module=produk';</script>";
            }else {
                echo "<script> alert ('Data Produk gagal Masuk'); window.location ='$adminUrl'+ 'dashboard.php?module=tambah_produk';</script>";
            }
        } else{
            echo "<script> alert ('Data Gambar Produk gagal Masuk'); window.location ='$adminUrl'+ 'dashboard.php?module=tambah_produk';</script>";
        }
    } else {
        echo "<script> alert ('Data Gambar Produk gagal Masuk karena ukuran lebih dari 1 mb'); window.location ='$adminUrl'+ 'dashboard.php?module=tambah_produk';</script>";
    }
} else {
    echo "<script> alert ('Data Gambar Produk gagal Masuk karena format foto salah'); window.location ='$adminUrl'+ 'dashboard.php?module=tambah_produk';</script>";
}


?>