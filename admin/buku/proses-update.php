<?php
include "../../components/koneksi.php";
include "../components/izin.php";

$id = $_POST['id'];
$judul = $_POST['judul'];
$kategori = $_POST['kategori_id'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$tahun = $_POST['tahun'];

mysqli_query($koneksi, "UPDATE buku SET Judul='$judul', KategoriID='$kategori', Penulis='$penulis', Penerbit='$penerbit', TahunTerbit='$tahun' WHERE BukuID='$id'");

header("location:../buku.php");
?>