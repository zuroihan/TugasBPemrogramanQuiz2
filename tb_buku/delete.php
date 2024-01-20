<?php
include '../koneksi.php';
$id_buku = $_GET['id_buku'];
$query = "DELETE FROM tb_buku WHERE id_buku='$id_buku'";
mysqli_query($koneksi, $query);
header("location:../index.php");
