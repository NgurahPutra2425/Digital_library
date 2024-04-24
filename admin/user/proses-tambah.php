<?php
include "../../components/koneksi.php";
include "../components/izin.php";

$nama = $_POST['nama'];
$username = $_POST['username'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$pass = md5($_POST['pass']);
$level = $_POST['level'];

mysqli_query($koneksi, "INSERT INTO user(`UserID`,`NamaLengkap`, `Username`, `Level`, `Email`, `Alamat`, `Password`) VALUES ('','$nama','$username','$level','$email','$alamat','$pass')");

header("location:../user.php");