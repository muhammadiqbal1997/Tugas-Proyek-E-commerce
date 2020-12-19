<?php
$baseUrl = "http://localhost/tugas/";
$adminUrl = "http://localhost/tugas/admin/";

$koneksi = mysqli_connect("localhost","root","","projeksatu");

if(mysqli_connect_errno()){
    echo "Failed to Connect To Database: " . mysqli_connect_error();
    exit();
}
?>