<?php
include "../components/koneksi.php";

$username = $_POST['username'];
$pass = md5($_POST['pass']);

$data = mysqli_query($koneksi, "SELECT * FROM user WHERE Username ='$username' AND Password = '$pass'");

if (mysqli_num_rows($data) > 0) {
    $d = mysqli_fetch_array($data);
    $_SESSION['user'] = $d;
    if ($d['Level'] == '1') {
        $_SESSION['Username'] = $username;
        $_SESSION['Level'] = "1";
        header("location:../admin/index.php");
    } else if ($d['Level'] == "2") {
        $_SESSION['Username'] = $username;
        $_SESSION['Level'] = "2";
        header("location:../petugas/index.php");
    } else if ($d['Level'] == "3") {
        $_SESSION['Username'] = $username;
        $_SESSION['Level'] = "3";
        header("location:../peminjam/index.php");
    } else {
        header('location:../index.php?pesan=akun');
    }
} else {
    header("location:../index.php?pesan=gagal");
}
