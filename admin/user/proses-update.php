<?php
include "../../components/koneksi.php";
include "../components/izin.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$pass = md5($_POST['pass']);
$level = $_POST['level'];

mysqli_query($koneksi, "UPDATE user SET NamaLengkap='$nama', Username='$username', Alamat='$alamat', Email='$email', Password='$pass' WHERE UserID='$id'");

header("location:../user.php");
