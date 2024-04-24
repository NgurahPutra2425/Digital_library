<?php
include "../../components/koneksi.php";
include "../components/izin.php";

$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM ulasan WHERE UlasanID = '$id'");

header("location:../ulasan.php");
?>