<?php
include "../components/head.php";
include "../components/koneksi.php";

$data = mysqli_query($koneksi, "SELECT * FROM buku LEFT JOIN kategoribuku ON buku.KategoriID=kategoribuku.KategoriID");
$koleksi = mysqli_query($koneksi, "SELECT * FROM koleksipribadi WHERE UserID = " . $_SESSION['user']['UserID']);
$bookmarks = [];
while ($k = mysqli_fetch_array($koleksi)) {
    $bookmarks[] = $k['BukuID'];
}
;
error_reporting(0);
?>

<div class="w-full capitalize">
    <?php include "./components/navbar.php";
    include "./components/izin.php"; ?>
    <div class="flex flex-col justify-center items-center">
        <h1 class="text-4xl font-bold my-2">Daftar Buku</h1>
        <div class="grid md:grid-cols-5 grid-cols-2 md:gap-6 gap-4 md:px-4 px-2 my-2">
            <?php while ($d = mysqli_fetch_array($data)) { ?>
                <div class="w-full h-full">
                    <img src="../cover/<?php echo $d['Foto'] ?>" class="object-fit w-[100%] md:h-[60%] h-[55%]" alt="...">
                    <div class="md:h-[30%] h-[36%] w-full">
                        <div class="md:h-auto h-auto w-full">
                            <p class="text-sm md:text-base"><span class="font-bold ">Judul : </span>
                                <?php echo $d['Judul'] ?>
                            </p>
                        </div>
                        <div class="md:h-[15%] h-auto">
                            <p class="text-sm md:text-base"><span class="font-bold">Kategori buku : </span>
                                <?php echo $d['NamaKategori'] ?>
                            </p>
                        </div>
                        <div class="md:h-auto h-auto">
                            <p class="text-sm md:text-base"><span class="font-bold">Penulis : </span>
                                <?php echo $d['Penulis'] ?>
                            </p>
                        </div>
                        <div class="md:h-auto h-auto">
                            <p class="text-sm md:text-base"><span class="font-bold">Penerbit : </span>
                                <?php echo $d['Penerbit'] ?>
                            </p>
                        </div>
                        <div class="md:h-[15%] h-auto">
                            <p class="text-sm md:text-base"><span class="font-bold">Tahun terbit : </span>
                                <?php echo $d['TahunTerbit'] ?>
                            </p>
                        </div>
                    </div>
                    <div class="">
                        <a href="./peminjaman/pinjam.php?id=<?php echo $d['BukuID'] ?>"
                            class="bg-yellow-300 px-2 rounded rounded-lg">Pinjam</a>
                        <?php
                        if (in_array($d['BukuID'], $bookmarks)) { ?>
                            <a href="./koleksi/hapus.php?id=<?php echo $d['BukuID']; ?>"
                                class="bg-yellow-300 px-3 rounded-md"><i class="fa-solid fa-bookmark"></i></a>
                        <?php } else { ?>
                            <a href="./koleksi/simpan.php?id=<?php echo $d['BukuID']; ?>"
                                class="bg-yellow-300 px-3 rounded-md"><i class="fa-regular fa-bookmark"></i></a>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
        </div>
        <!-- <table class="w-[90%]">
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
        </table> -->

    </div>
</div>

<?php
include "../components/foot.php";
?>