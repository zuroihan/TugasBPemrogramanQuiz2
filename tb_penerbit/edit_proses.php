<?php
include '../koneksi.php';
$id_penerbit = $_POST["id_penerbit"];
$nama = $_POST["nama"];
$alamat = $_POST["alamat"];
$kota = $_POST["kota"];
$telepon = $_POST["telepon"];
mysqli_query($koneksi,"update tb_penerbit set nama='$nama', alamat='$alamat', nama='$nama', kota='$kota', telepon='$telepon' where id_penerbit='$id_penerbit'");
header("location:../pengadaan.php");
