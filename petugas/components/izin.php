<?php


if ($_SESSION['Level'] == "") {
    header("location:../index.php?pesan=login");
} elseif ($_SESSION['Level'] == "1") {
    header('location:../index.php?pesan=admin');
} elseif ($_SESSION['Level'] == "3") {
    header('location:../index.php?pesan=user');
}
