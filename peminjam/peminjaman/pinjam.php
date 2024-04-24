<?php
include "../../components/head.php";
include "../../components/koneksi.php";
include "../components/izin.php";

$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM buku WHERE BukuID = '$id'");
$d = mysqli_fetch_array($data);
?>

<div class="flex w-full h-screen items-center justify-center text-left capitalize">
    <form action="./proses-tambah.php" class="flex flex-col relative justify-center items-center border border-[3px] border-black rounded-xl h-[60%] w-[40%] z-99" method="post">
        <input type="hidden" name="id" value="<?php echo $d['BukuID'] ?>">
        <label for="buku" class="w-[95%] text-lg font-bold">Judul Buku : </label>
        <input type="text" class="bg-blue-300 w-[95%] placeholder:px-2 rounded-lg mb-3" value="<?php echo $d['Judul'] ?>" name="buku" id="buku" disabled required>
        <label for=" tanggal" class="w-[95%] text-lg font-bold">Tanggal Pinjam : </label>
        <input type="date" class="bg-blue-300 w-[95%] placeholder:px-2 rounded-lg mb-3" name="tanggal" id="tanggal" required>
        <div class="w-[95%] text-left justify-start">
            <button type="submit" class="bg-yellow-400 my-4 px-4 rounded-lg">
                Submit
            </button>
            <a href="../buku.php" class="bg-red-600 rounded rounded-lg px-2">kembali</a>
        </div>
    </form>
</div>

<?php
include "../../components/foot.php";
?>