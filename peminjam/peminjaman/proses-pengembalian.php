<?php
include "../../components/koneksi.php";
include "../components/izin.php";

$id = $_POST['id'];
$tgl = $_POST['tanggal'];


mysqli_query($koneksi, "UPDATE peminjaman SET Tgl_Pengembalian = '$tgl', `Status` = 'Sedang Dikembalikan' WHERE PeminjamanID= '$id'");

header("location:../peminjaman.php");