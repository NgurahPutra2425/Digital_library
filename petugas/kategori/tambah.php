<?php
include "../../components/head.php";
include "../../components/koneksi.php";
include "../components/izin.php";
?>

<div class="flex w-full h-screen items-center justify-center text-left capitalize">
    <form action="./proses-tambah.php" class="flex flex-col relative justify-center items-center border border-[3px] border-black rounded-xl h-[60%] w-[40%] z-99" method="post">
        <label for="kategori" class="w-[95%] text-lg font-bold">nama kategori : </label>
        <input type="text" class="bg-blue-300 w-[95%] placeholder:px-2 rounded-lg mb-3" name="kategori" id="kategori" required>
        <div class="w-[95%] text-left justify-start">
            <button type="submit" class="bg-yellow-400 my-4 px-4 rounded-lg">
                Submit
            </button>
            <a href="../kategori.php" class="bg-red-600 rounded rounded-lg px-2">kembali</a>
        </div>
    </form>
</div>

<?php
include "../../components/foot.php";
?>