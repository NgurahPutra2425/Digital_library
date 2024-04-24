<?php
include "../../components/head.php";
include "../../components/koneksi.php";
include "../components/izin.php";

$id = $_GET['id'];
$buku = mysqli_query($koneksi, "SELECT * FROM buku WHERE BukuID = '$id'");
$b = mysqli_fetch_array($buku);
?>

<div class="w-full h-screen flex flex-col justify-center items-center text-center">
    <div class="w-[35%] flex flex-col items-center justify-center border border-slate-300 rounded-md">
        <form action="proses-update.php" method="post" enctype="multipart/form-data"
            class="grid grid-col-1 w-full my-4 px-4">
            <input type="hidden" value="<?php echo $id ?>" name="id">
            <label class="w-[30%] text-left">Judul Buku : </label>
            <input type="text" name="judul" class="w-[100%] bg-cyan-400 rounded-lg my-2"
                value="<?php echo $b['Judul'] ?>" required>
            <label class="w-[30%] text-left">Kategori Buku :</label>
            <select name="kategori_id" id="kategori_id" class="w-[100%] bg-cyan-400 rounded-lg my-2">
                <?php

                $data = mysqli_query($koneksi, "SELECT * FROM kategoribuku");

                while ($d = mysqli_fetch_array($data)) {
                    ?>
                    <option <?php if ($d['KategoriID'] == $b['KategoriID']) {
                        echo "selected";
                    }
                    ?> value="<?php echo $d['KategoriID'] ?>" class="w-[100%] bg-cyan-400 rounded-lg my-2">
                        <?php echo $d['NamaKategori'] ?>
                    </option>
                    <?php
                }
                ?>
            </select>
            <label class="w-[30%] text-left">Penulis Buku : </label>
            <input type="text" name="penulis" class="w-[100%] bg-cyan-400 rounded-lg my-2"
                value="<?php echo $b['Penulis'] ?>" required>
            <label class="w-[30%] text-left">Penerbit : </label>
            <input type="text" name="penerbit" class="w-[100%] bg-cyan-400 rounded-lg my-2"
                value="<?php echo $b['Penerbit'] ?>" required>
            <label class="w-[30%] text-left">Cover Buku : </label>
            <input class="w-[100%] bg-cyan-200 cursor-not-allowed rounded-lg my-2" value="<?php echo $b['Foto'] ?>" type="text"
                name="cover" id="cover" disabled required>
            <label class="w-[30%] text-left">Tahun Terbit : </label>
            <input type="number" name="tahun" class="w-[100%] bg-cyan-400 rounded-lg my-2"
                value="<?php echo $b['TahunTerbit'] ?>" min="1900" max="2030" required>
            <div class="flex flex-cols my-2">
                <button type="submit" class="bg-yellow-400 w-[15%] rounded-md mr-2">Submit</button>
                <a href="../buku.php" class="bg-red-500 w-[17%] rounded-md mx-2">Kembali</a>
            </div>
        </form>
    </div>
</div>

<script>
    function validasiInput(input) {
        if (input.value < 1900) {
            input.value = 1900;
        } else if (input.value > 2100) {
            input.value = 2100;
        }
    }
</script>

<?php
include "../../components/foot.php";
?>