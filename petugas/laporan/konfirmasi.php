<?php
include "../../components/head.php";
include "../../components/koneksi.php";
include "../components/izin.php";

$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM peminjaman WHERE PeminjamanID = '$id'");
$d = mysqli_fetch_array($data);
?>

<div class="flex w-full h-screen items-center justify-center text-left capitalize">
    <form action="./proses-konfirmasi.php"
        class="flex flex-col relative justify-center items-center border border-[3px] border-black rounded-xl h-[60%] w-[40%] z-99"
        method="post">
        <input type="hidden" name="id" value="<?php echo $d['PeminjamanID'] ?>">
        <label for="status" class="w-[95%] text-lg font-bold">status</label>
        <select name="status" id="status" class="bg-blue-300 w-[95%] placeholder:px-2 rounded-lg mb-3">
            <option value="Dipinjam">Dipinjam</option>
            <option value="Dikembalikan">Dikembalikan</option>
        </select>
        <!-- <label for="ulasan" class="w-[95%] text-lg font-bold">Ulasan : </label>
        <input type="text" class="bg-blue-300 w-[95%] placeholder:px-2 rounded-lg mb-3" name="ulasan" id="ulasan"
            required>
        <label for="rating" class="w-[95%] text-lg font-bold">Rating : </label>
        <input type="number" class="bg-blue-300 w-[95%] placeholder:px-2 rounded-lg mb-3" min="1" max="10"
            placeholder="-/10" name="rating" id="rating" required> -->
        <div class="w-[95%] text-left justify-start">
            <button type="submit" class="bg-yellow-400 my-4 px-4 rounded-lg">
                Submit
            </button>
            <a href="../laporan.php" class="bg-red-600 rounded rounded-lg px-2">kembali</a>
        </div>
    </form>
</div>

<?php
include "../../components/foot.php";
?>