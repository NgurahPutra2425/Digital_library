<?php
include "../../components/koneksi.php";
include "../components/izin.php";

$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$tahun = $_POST['tahun'];
$kategori = $_POST['kategori_id'];

$foto = $_FILES['cover']['name'];
$tmp = $_FILES['cover']['tmp_name'];
$lokasi = '../../cover/';
// var_dump($foto);
$nama_foto = rand(0, 999) . '-' . $foto;

move_uploaded_file($tmp, $lokasi . $nama_foto);

$query = mysqli_query($koneksi, "INSERT INTO buku(`BukuID`, `Judul`, `KategoriID`, `Penulis`, `Penerbit`, `Foto`, `TahunTerbit`) VALUES('','$judul','$kategori','$penulis','$penerbit', '$nama_foto','$tahun')");

if ($query) {
    header("location:../buku.php?pesan=berhasil");
} else {
    header("location:tambah-buku.php?pesan=gagal_ekstensi");
}