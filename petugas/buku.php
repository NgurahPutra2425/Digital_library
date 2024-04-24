<?php
include "../components/head.php";
include "../components/koneksi.php";
?>

<div class="w-full capitalize">
    <?php include "./components/navbar.php";
    include "./components/izin.php"; ?>
    <div class="flex flex-col justify-center items-center text-center ">
        <h1 class="text-4xl font-bold my-2">Daftar Buku</h1>
        <a href="./buku/tambah.php" class="bg-[#38BDF8] px-4 rounded rounded-lg mt-2 mb-4">tambah buku</a>
        <table class="w-[90%] table-fixed">
            <thead>
                <tr>
                    <th class="border w-[5%]">no</th>
                    <th class="border w-[15%]">judul</th>
                    <th class="border w-[15%]">kategori</th>
                    <th class="border w-[15%]">penulis</th>
                    <th class="border w-[15%]">penerbit</th>
                    <th class="border w-[15%]">cover</th>
                    <th class="border w-[10%]">tahun terbit</th>
                    <th class="border w-[15%]">aksi</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $no = 1;
                $data = mysqli_query($koneksi, "SELECT * FROM buku LEFT JOIN kategoribuku ON buku.KategoriID = kategoribuku.KategoriID");
                while ($d = mysqli_fetch_array($data)) {
                ?>
                    <tr>
                        <td class="border"><?php echo $no++ ?></td>
                        <td class="border"><?php echo $d['Judul'] ?></td>
                        <td class="border"><?php echo $d['NamaKategori'] ?></td>
                        <td class="border"><?php echo $d['Penulis'] ?></td>
                        <td class="border"><?php echo $d['Penerbit'] ?></td>
                        <td class="border"><img src="../cover/<?php echo $d['Foto']; ?>" alt="..."></td>
                        <td class="border"><?php echo $d['TahunTerbit'] ?></td>
                        <td class="border">
                            <a href="./buku/update.php?id=<?php echo $d['BukuID'] ?>" class="bg-yellow-300 px-3 rounded rounded-lg">Update</a>
                            <a href="./buku/hapus.php?id=<?php echo $d['BukuID'] ?>" class="bg-red-600 px-3 rounded rounded-lg">Hapus</a>
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