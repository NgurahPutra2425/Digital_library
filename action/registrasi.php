<?php
include "../components/koneksi.php";

$nama = $_POST['nama'];
$username = $_POST['username'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$pass = md5($_POST['pass']);

mysqli_query($koneksi, "INSERT INTO user VALUES ('','$nama','$username','3','$email','$alamat','$pass')");

header("location:../index.php?pesan=registrasi");
?>