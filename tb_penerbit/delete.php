<?php
include '../koneksi.php';
$id_penerbit = $_GET['id_penerbit'];
$query = "DELETE FROM tb_penerbit WHERE id_penerbit='$id_penerbit'";
mysqli_query($koneksi, $query);
header("location:../pengadaan.php");
