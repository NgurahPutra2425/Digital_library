<?php
include "../../components/koneksi.php";
include "../components/izin.php";

$id = $_POST['id'];
$buku = $_POST['buku'];
$ulasan = $_POST['ulasan'];
$rating = $_POST['rating'];


mysqli_query($koneksi, "UPDATE ulasanbuku SET Ulasan='$ulasan', Rating='$rating' WHERE UlasanID='$id'");

header("location:../ulasan.php");
