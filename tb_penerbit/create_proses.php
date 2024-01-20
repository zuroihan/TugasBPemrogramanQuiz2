<?php
include "../koneksi.php";
$id_penerbit = $_POST["id_penerbit"];
$nama = $_POST["nama"];
$alamat = $_POST["alamat"];
$kota = $_POST["kota"];
$telepon = $_POST["telepon"];
$sql = "INSERT INTO tb_penerbit (id_penerbit, nama, alamat, kota, telepon) VALUES('$id_penerbit','$nama','$alamat','$kota','$telepon')";
$query = mysqli_query($koneksi, $sql);
header("location:../pengadaan.php");
