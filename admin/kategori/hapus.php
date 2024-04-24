<?php
include "../../components/koneksi.php";
include "../components/izin.php";

$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM kategoribuku WHERE KategoriID = '$id'");

header("location:../kategori.php");
?>