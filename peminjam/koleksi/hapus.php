<?php
include "../../components/koneksi.php";
include "../components/izin.php";

$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM koleksipribadi WHERE BukuID = '$id' AND UserID = ". $_SESSION['user']['UserID']);
header("location:../buku.php");
?>