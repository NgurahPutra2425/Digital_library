<?php
include "../../components/koneksi.php";
include "../components/izin.php";

$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM user WHERE UserID = '$id'");

header("location:../user.php");
