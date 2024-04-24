<?php
include "../../components/koneksi.php";
include "../components/izin.php";

$id = $_GET['id'];
$user = $_SESSION['user']['UserID'];

mysqli_query($koneksi, "INSERT INTO koleksipribadi (`KoleksiID`, `UserID`, `BukuID`) VALUES ('','$user', '$id')");

header("location:../buku.php");