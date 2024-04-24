<?php
include "../../components/head.php";
include "../../components/koneksi.php";
include "../components/izin.php";
?>

<div class="w-full h-screen flex flex-col justify-center items-center text-center">
  <?php
  if (isset($_GET['pesan'])) {
    if ($_GET['pesan'] == "gagal_ekstensi") {
      echo "<div class='mb-2 w-full bg-red-600 text-center rounded-md'>Salah Jenis File</div>";
    }
  }
  if (isset($_GET['pesan'])) {
    if ($_GET['pesan'] == "berhasil") {
      echo "<div class='mb-2 w-full bg-red-600 text-center rounded-md'>Berhasil Mengirim</div>";
    }
  }
  if (isset($_GET['pesan'])) {
    if ($_GET['pesan'] == "file_besar") {
      echo "<div class='mb-2 w-full bg-green-500 text-center rounded-md'>Ukuran File Terlalu Besar</div>";
    }
  }
  ?>
  <div class="w-[35%] flex flex-col items-center justify-center border border-slate-300 rounded-md">
    <form action="proses-tambah.php" method="post" enctype="multipart/form-data" class="grid grid-col-1 w-full my-4 px-4">
      <label class="w-[30%] text-left">Judul Buku : </label>
      <input type="text" name="judul" class="w-[100%] bg-cyan-400 rounded-lg my-2" required>
      <label class="w-[30%] text-left">Kategori Buku :</label>
      <select name="kategori_id" id="kategori_id" class="w-[100%] bg-cyan-400 rounded-lg my-2">
        <?php

        $data = mysqli_query($koneksi, "SELECT * FROM kategoribuku");

        while ($d = mysqli_fetch_array($data)) {
        ?>
          <option value="<?php echo $d['KategoriID'] ?>" class="w-[100%] bg-cyan-400 rounded-lg my-2">
            <?php echo $d['NamaKategori'] ?>
          </option>
        <?php
        }
        ?>
      </select>
      <label class="w-[30%] text-left">Penulis Buku : </label>
      <input type="text" name="penulis" class="w-[100%] bg-cyan-400 rounded-lg my-2" required>
      <label class="w-[30%] text-left">Penerbit : </label>
      <input type="text" name="penerbit" class="w-[100%] bg-cyan-400 rounded-lg my-2" required>
      <label class="w-[30%] text-left">Cover Buku : </label>
      <input class="w-[100%] bg-cyan-400 rounded-lg my-2" type="file" name="cover" id="cover" required>
      <label class="w-[30%] text-left">Tahun Terbit : </label>
      <input type="number" name="tahun" class="w-[100%] bg-cyan-400 rounded-lg my-2"required>
      <div class="flex flex-cols my-2">
        <button type="submit" class="bg-yellow-400 w-[15%] rounded-md mr-2">Submit</button>
        <a href="../buku.php" class="bg-red-500 w-[17%] rounded-md mx-2">Kembali</a>
      </div>
    </form>
  </div>
</div>

<?php
include "../../components/foot.php";
?>