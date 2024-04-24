<?php
include "../components/head.php";
include "../components/koneksi.php";
?>

<div class="w-full capitalize">
    <?php include "./components/navbar.php";
    include "./components/izin.php"; ?>
    <div class="flex flex-col justify-center items-center text-center ">
        <h1 class="text-4xl font-bold my-2">Daftar User</h1>
        <a href="./user/tambah.php" class="bg-[#38BDF8] px-4 rounded rounded-lg mt-2 mb-4">tambah user</a>
        <table class="w-[90%] table-auto">
            <thead>

                <tr>
                    <th class="border w-[5%]">no</th>
                    <th class="border w-[15%]">nama lengkap</th>
                    <th class="border w-[15%]">username</th>
                    <th class="border w-[15%]">alamat</th>
                    <th class="border w-[15%]">email</th>
                    <th class="border w-[15%]">level</th>
                    <th class="border w-[15%]">aksi</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $no = 1;
                $data = mysqli_query($koneksi, "SELECT * FROM user");
                while ($d = mysqli_fetch_array($data)) {
                ?>
                    <tr>
                        <td class="border">
                            <?php echo $no++ ?>
                        </td>
                        <td class="border">
                            <?php echo $d['NamaLengkap'] ?>
                        </td>
                        <td class="border">
                            <?php echo $d['Username'] ?>
                        </td>
                        <td class="border">
                            <?php echo $d['Alamat'] ?>
                        </td>
                        <td class="border">
                            <?php echo $d['Email'] ?>
                        </td>
                        <td class="border">
                            <?php echo $d['Level'] ?>
                        </td>
                        <td class="border">
                            <!-- <a href="./user/update.php?id=<?php echo $d['UserID'] ?>" class="bg-yellow-300 px-3 rounded rounded-lg">Update</a> -->
                            <a href="./user/hapus.php?id=<?php echo $d['UserID'] ?>" class="bg-red-600 px-3 rounded rounded-lg">Hapus</a>
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