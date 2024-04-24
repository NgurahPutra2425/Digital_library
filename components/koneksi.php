<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'digital_library');

session_start();

if ($koneksi) {
} else {
    echo "gagal";
}