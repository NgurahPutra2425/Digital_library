<?php
include "../components/head.php";
include "../components/koneksi.php";
?>

<div class="w-full capitalize">
    <?php include "./components/navbar.php";
    include "./components/izin.php"; ?>
    <div class="flex flex-col justify-center items-center text-center ">
        <h1 class="text-4xl font-bold my-4">Daftar Kategori</h1>
        <table class="w-[90%] mt-2 table-fixed">
            <thead>

                <tr>
                    <th class="border w-[5%]">no</th>
                    <th class="border w-[20%]">nama kategori</th>
                    <th class="border w-[10%]">aksi</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $no = 1;
                $data = mysqli_query($koneksi, "SELECT * FROM kategoribuku");
                while ($d = mysqli_fetch_array($data)) {
                ?>
                    <tr>
                        <td class="border">
                            <?php echo $no++ ?>
                        </td>
                        <td class="border">
                            <?php echo $d['NamaKategori'] ?>
                        </td>
                        <td class="border">
                            <a href="./kategori/lihat.php?id=<?php echo $d['KategoriID'] ?>" class="bg-yellow-300 px-4 rounded rounded-lg">lihat</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>

    </div>
</div>

<?php
include "../components/foot.php";
?>