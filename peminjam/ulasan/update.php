<?php
include "../../components/head.php";
include "../../components/koneksi.php";
include "../components/izin.php";

$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM ulasan LEFT JOIN user ON ulasan.UserID = user.UserID LEFT JOIN buku ON ulasan.BukuID = buku.BukuID WHERE ulasan.UlasanID = '$id'");
$row = mysqli_fetch_array($data);
?>

<div class="flex w-full h-screen items-center justify-center text-left capitalize">
    <form action="./proses-update.php"
        class="flex flex-col relative justify-center items-center border border-[3px] border-black rounded-xl h-[60%] w-[40%] z-99"
        method="post">
        <input type="hidden" name="id" value="<?php echo $row['UlasanID'] ?>">
        <label for="buku" class="w-[95%] text-lg font-bold">Judul Buku : </label>
        <select name="buku" id="buku" class="bg-blue-300 w-[95%] placeholder:px-2 rounded-lg mb-3" disabled>
            <?php

            $data = mysqli_query($koneksi, "SELECT * FROM buku");

            while ($d = mysqli_fetch_array($data)) {
                ?>
                <option <?php if ($d['BukuID'] == $row['BukuID']) {
                    echo "selected";
                }
                ?> value="<?php echo $d['BukuID'] ?>"
                    class="w-[100%] bg-cyan-400 rounded-lg my-2">
                    <?php echo $d['Judul'] ?>
                </option>
                <?php
            }
            ?>
        </select>
        <label for="ulasan" class="w-[95%] text-lg font-bold">Ulasan : </label>
        <input type="text" class="bg-blue-300 w-[95%] placeholder:px-2 rounded-lg mb-3"
            value="<?php echo $row['Ulasan'] ?>" name="ulasan" id="ulasan" required>
        <label for="rating" class="w-[95%] text-lg font-bold">Rating : </label>
        <input type="number" class="bg-blue-300 w-[95%] placeholder:px-2 rounded-lg mb-3"
            value="<?php echo $row['Rating'] ?>" min="1" max="10" placeholder="-/10" name="rating" id="rating" required>
        <div class="w-[95%] text-left justify-start">
            <button type="submit" class="bg-yellow-400 my-4 px-4 rounded-lg">
                Submit
            </button>
            <a href="../ulasan.php" class="bg-red-600 rounded rounded-lg px-2">kembali</a>
        </div>
    </form>
</div>

<?php
include "../../components/foot.php";
?>