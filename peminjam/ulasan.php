<?php
include "../components/head.php";
include "../components/koneksi.php";

?>

<div class="w-full capitalize">
    <?php include "./components/navbar.php";
    include "./components/izin.php"; ?>
    <div class="flex flex-col justify-center items-center text-center ">
        <h1 class="text-4xl font-bold my-2">Ulasan Buku</h1>
        <a href="./ulasan/tambah.php" class="bg-[#38BDF8] px-4 rounded rounded-lg mt-2 mb-4">tambah ulasan</a>
        <table class="w-[90%] table-fixed">
            <thead>
                <tr>
                    <th class="border w-[5%]">no</th>
                    <th class="border w-[15%]">Username</th>
                    <th class="border w-[15%]">Judul</th>
                    <th class="border w-[15%]">ulasan</th>
                    <th class="border w-[15%]">rating</th>
                    <th class="border w-[15%]">aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $data = mysqli_query($koneksi, "SELECT * FROM ulasan LEFT JOIN user ON ulasan.UserID = user.UserID LEFT JOIN buku ON ulasan.BukuID = buku.BukuID");
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
                            <?php echo $d['Ulasan'] ?>
                        </td>
                        <td class="border">
                            <?php echo $d['Rating'] ?>/10
                        </td>
                        <?php
                        if ($_SESSION["user"]["UserID"] == $d['UserID']) {
                        ?>
                            <td class="border">
                                <a href="./ulasan/update.php?id=<?php echo $d['UlasanID'] ?>" class="bg-yellow-300 px-3 rounded rounded-lg">Update</a>
                                <a href="./ulasan/hapus.php?id=<?php echo $d['UlasanID'] ?>" class="bg-red-600 px-3 rounded rounded-lg">Hapus</a>
                            </td>
                        <?php
                        } else { ?>

                        <?php
                        }
                        ?>
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