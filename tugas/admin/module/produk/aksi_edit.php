<?php
include "../../../lib/koneksi.php";


$id_produk = $_POST['id_produk']; 

$nama_file = $_FILES['gambar']['name'];
$ukuran_file = $_FILES['gambar']['size'];
$tipe_file = $_FILES['gambar']['type'];
$tmp_file = $_FILES['gambar']['tmp_name'];

$nama_produk = $_POST['nama_produk'];
$id_kategori = $_POST['id_kategori'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];
$deskripsi = $_POST['deskripsi'];

$path = "../../upload/". $nama_file;

if ($tipe_file == "image/jpeg" || $tipe_file == "image/png") {
	if ($ukuran_file <= 1000000) {
		if (move_uploaded_file($tmp_file, $path)) {
			$edit = mysqli_query($koneksi, "UPDATE tbl_produk SET nama_produk='$nama_produk', id_kategori='$id_kategori', harga='$harga', jumlah='$jumlah', gambar='$nama_file', deskripsi='$deskripsi' WHERE id_produk='$id_produk'");
            if ($edit) {
				echo "<script> alert('Data Produk Berhasil Diubah'); window.location = '$adminUrl'+ 'dashboard.php?module=produk';</script>";
			}
			else {
				echo "<script> alert('Data Produk Gagal Diubah'); window.location = '$adminUrl'+ 'dashboard.php?module=edit_produk&id='+'$idProduk';</script>";
			}
		}
		else {
			echo "<script> alert('Data Gambar Gagal Diubah'); window.location = '$adminUrl'+ 'dashboard.php?module=edit_produk&id='+'$idProduk';</script>";
		}
	}
	else {
		echo "<script> alert('Data Gambar Gagal Diubah Karena Ukuran File Melebihi 1MB'); window.location = '$adminUrl'+ 'dashboard.php?module=edit_produk&id='+'$id_produk';</script>";
	}
}

?>