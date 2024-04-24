<?php
include "../../components/koneksi.php";
include "../components/izin.php";

$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM peminjaman WHERE PeminjamanID = '$id'");

header("location:../laporan.php");
?>