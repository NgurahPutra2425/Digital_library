<?php
include "../components/head.php";
include "../components/koneksi.php";
?>

<div class="w-full capitalize">
    <?php include "./components/navbar.php";
    include "./components/izin.php"; ?>
    <div class="flex flex-col justify-center items-center text-center ">
        <h1 class="text-4xl font-bold my-2">Laporan Peminjaman</h1>
        <a href="./laporan/cetak.php" class="bg-[#38BDF8] px-4 rounded rounded-lg mt-2 mb-4">cetak laporan</a>
        <table class="w-[90%] table-fixed">
            <thead>
                <tr>
                    <th class="border w-[5%]">no</th>
                    <th class="border w-[15%]">username</th>
                    <th class="border w-[15%]">judul buku</th>
                    <th class="border w-[15%]">tanggal peminjaman</th>
                    <th class="border w-[15%]">tanggal pengembalian</th>
                    <th class="border w-[15%]">status</th>
                    <th class="border w-[15%]">aksi</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $no = 1;
                $data = mysqli_query($koneksi, "SELECT * FROM peminjaman LEFT JOIN user ON peminjaman.UserID = user.UserID LEFT JOIN buku ON peminjaman.BukuID = buku.BukuID");
                while ($d = mysqli_fetch_array($data)) {
                ?>
                    <tr>
                        <td class="border">
                            <?php echo $no++ ?>
                        </td>
                        <td class="border">
                            <?php echo $d['Username'] ?>
                        </td>
                        <td class="border">
                            <?php echo $d['Judul'] ?>
                        </td>
                        <td class="border">
                            <?php echo $d['Tgl_Pinjam'] ?>
                        </td>
                        <td class="border">
                            <?php echo $d['Tgl_Pengembalian'] ?>
                        </td>
                        <td class="border">
                            <?php echo $d['Status'] ?>
                        </td>
                        <td class="border">
                            <a href="./laporan/konfirmasi.php?id=<?php echo $d['PeminjamanID'] ?>" class="bg-yellow-300 px-3 rounded rounded-lg">Update</a>
                            <a href="./laporan/hapus.php?id=<?php echo $d['PeminjamanID'] ?>" class="bg-red-600 px-3 rounded rounded-lg">Hapus</a>
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