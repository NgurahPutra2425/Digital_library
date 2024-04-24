<?php
include "../../components/koneksi.php";
include "../components/izin.php";

$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM buku WHERE BukuID = '$id'");

header("location:../buku.php");
?>