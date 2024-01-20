<?php
include '../koneksi.php';
$id_buku = $_POST["id_buku"];
$kategori = $_POST["kategori"];
$nama_buku = $_POST["nama_buku"];
$harga = $_POST["harga"];
$stok = $_POST["stok"];
$penerbit = $_POST["penerbit"];
mysqli_query($koneksi,"update tb_buku set nama_buku='$nama_buku', kategori='$kategori', nama_buku='$nama_buku', harga='$harga', stok='$stok', penerbit='$penerbit' where id_buku='$id_buku'");
header("location:../index.php");