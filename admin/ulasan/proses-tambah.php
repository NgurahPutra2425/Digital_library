<?php
include "../../components/koneksi.php";
include "../components/izin.php";

$user = $_SESSION['user']['UserID'];
$buku = $_POST['buku'];
$ulasan = $_POST['ulasan'];
$rating = $_POST['rating'];


mysqli_query($koneksi, "INSERT INTO ulasan VALUES ('','$user', '$buku', '$ulasan', '$rating')");

header("location:../ulasan.php");
