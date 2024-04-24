<?php
include "../components/head.php";
include "../components/koneksi.php";

$id = $_SESSION['user']['UserID'];

$status = mysqli_query($koneksi, "SELECT * FROM peminjaman LEFT JOIN user ON peminjaman.UserID = user.UserID LEFT JOIN buku ON peminjaman.BukuID = buku.BukuID WHERE peminjaman.UserID = '$id'");
$d = mysqli_fetch_array($status);
?>

<div class="w-full capitalize">
    <?php include "./components/navbar.php";
    include "./components/izin.php"; ?>
    <div class="flex flex-col justify-center items-center text-center ">
        <h1 class="text-4xl font-bold my-4">Laporan Peminjaman</h1>
        <table class="w-[90%] mt-2 table-fixed">
            <thead>
                <tr>
                    <th class="border w-[5%]">no</th>
                    <th class="border w-[15%]">username</th>
                    <th class="border w-[15%]">judul buku</th>
                    <th class="border w-[15%]">tanggal peminjaman</th>
                    <th class="border w-[15%]">tanggal pengembalian</th>
                    <th class="border w-[15%]">status</th>
                    <?php if ($d['Status'] == "Dikembalikan") { ?>
                        <th class="border w-[15%]">pesan</th>
                    <?php } else { ?>
                        <th class="border w-[15%]">aksi</th>
                    <?php }
                    ?>

                </tr>
            </thead>
            <tbody>

                <?php
                $no = 1;
                $data = mysqli_query($koneksi, "SELECT * FROM peminjaman LEFT JOIN user ON peminjaman.UserID = user.UserID LEFT JOIN buku ON peminjaman.BukuID = buku.BukuID WHERE peminjaman.UserID = '$id'");
                while ($da = mysqli_fetch_array($data)) {
                ?>
                    <tr>
                        <td class="border">
                            <?php echo $no++ ?>
                        </td>
                        <td class="border">
                            <?php echo $da['Username'] ?>
                        </td>
                        <td class="border">
                            <?php echo $da['Judul'] ?>
                        </td>
                        <td class="border">
                            <?php echo $da['Tgl_Pinjam'] ?>
                        </td>
                        <td class="border">
                            <?php echo $da['Tgl_Pengembalian'] ?>
                        </td>
                        <td class="border">
                            <?php echo $da['Status'] ?>
                        </td>
                        <td class="border">
                            <?php if ($da['Status'] == "Dipinjam") { ?>
                                <a href="./peminjaman/pengembalian.php?id=<?php echo $da['PeminjamanID'] ?>" class="bg-yellow-300 px-3 rounded rounded-lg">Update</a>
                            <?php } elseif ($da['Status'] == "Dikembalikan") { ?>
                                <p class="text-red-600">Terima kasih telah meminjam</p>
                            <?php } else {
                                echo "Silahkan menunggu konfirmasi";
                            }
                            ?>

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