<?php
include "../../components/koneksi.php";
include "../components/izin.php";

$id = $_POST['id'];
$status = $_POST['status'];


mysqli_query($koneksi, "UPDATE peminjaman SET `Status` = '$status' WHERE PeminjamanID = '$id'");

header("location:../laporan.php");