<?php
include "../../components/koneksi.php";
include "../components/izin.php";

$kategori = $_POST['kategori'];

mysqli_query($koneksi, "INSERT INTO kategoribuku VALUES ('','$kategori')");

header("location:../kategori.php");
