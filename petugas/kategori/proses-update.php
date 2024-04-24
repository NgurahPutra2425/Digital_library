<?php
include "../../components/koneksi.php";
include "../components/izin.php";

$id = $_POST['id'];
$kategori = $_POST['kategori'];


mysqli_query($koneksi, "UPDATE kategoribuku SET NamaKategori='$kategori' WHERE KategoriID='$id'");

header("location:../kategori.php");
?>