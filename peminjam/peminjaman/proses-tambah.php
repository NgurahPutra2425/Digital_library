<?php
include "../../components/koneksi.php";
include "../components/izin.php";

$user = $_SESSION['user']['UserID'];
$id = $_POST['id'];
$tgl = $_POST['tanggal'];


mysqli_query($koneksi, "INSERT INTO peminjaman VALUES ('','$user', '$id', '$tgl','', 'Meminjam')");

header("location:../peminjaman.php");
