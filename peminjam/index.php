<?php
include "../components/head.php";
include "../components/koneksi.php";
?>

<div class="w-full capitalize">
    <?php include "./components/navbar.php";
    include "./components/izin.php"; ?>
    <div class="flex flex-col justify-center items-center text-center ">
        <h1 class="text-2xl font-bold my-2">Halaman Peminjam</h1>
        <?php
        $buku = mysqli_query($koneksi, "SELECT * FROM buku");
        $kategori = mysqli_query($koneksi, "SELECT * FROM kategoribuku");
        $user = mysqli_query($koneksi, "SELECT * FROM peminjaman WHERE UserID = " . $_SESSION['user']['UserID']);
        $ulasan = mysqli_query($koneksi, "SELECT * FROM ulasan");

        $b = mysqli_num_rows($buku);
        $k = mysqli_num_rows($kategori);
        $p = mysqli_num_rows($user);
        $u = mysqli_num_rows($ulasan);
        ?>

        <div class="w-full grid grid-cols-4 gap-4">
            <div class="w-full bg-yellow-300 flex flex-col justify-center items-center text-center">
                <h2 class="my-2 text-xl">Data Buku</h2>
                <p class="text-lg"><b>
                        <?php echo $b; ?>
                    </b></ class="text-lg">
                    <hr class="w-[80%]">
                    <a class="bg-black text-white my-2 px-2 rounded rounded-lg" href="buku.php">lihat data</a>
            </div>
            <div class="w-full bg-sky-300 flex flex-col justify-center items-center text-center">
                <h2 class="my-2 text-xl">Kategori Buku</h2>
                <p class="text-lg"><b>
                        <?php echo $k; ?>
                    </b></p>
                <hr class="w-[80%]">
                <a class="bg-black text-white my-2 px-2 rounded rounded-lg" href="kategori.php">lihat data</a>
            </div>
            <div class="w-full bg-indigo-300 flex flex-col justify-center items-center text-center">
                <h2 class="my-2 text-xl">Jumlah Peminjaman</h2>
                <p class="text-lg"><b>
                        <?php echo $p; ?>
                    </b></p>
                <hr class="w-[80%]">
                <a class="bg-black text-white my-2 px-2 rounded rounded-lg" href="peminjaman.php">lihat data</a>
            </div>
            <div class="w-full bg-emerald-300 flex flex-col justify-center items-center text-center">
                <h2 class="my-2 text-xl">ulasan user</h2>
                <p class="text-lg"><b>
                        <?php echo $u; ?>
                    </b></p>
                <hr class="w-[80%]">
                <a class="bg-black text-white my-2 px-2 rounded rounded-lg" href="ulasan.php">lihat data</a>
            </div>
        </div>
    </div>
</div>

<?php
include "../components/foot.php";
?>