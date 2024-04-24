<?php

if($_SESSION['Level']==""){
	header("location:../index.php?pesan=login");
}elseif ($_SESSION['Level']=="2") {
    header('location:../index.php?pesan=petugas');
}elseif ($_SESSION['Level']=="3") {
    header('location:../index.php?pesan=user');
}

?>