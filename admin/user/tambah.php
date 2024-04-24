<?php
include "../../components/head.php";
include "../../components/koneksi.php";
include "../components/izin.php";
?>

<div class="flex w-full h-screen items-center justify-center text-center">
    <form action="./proses-tambah.php" class="flex flex-col relative justify-center items-center border border-[3px] border-black rounded-xl h-[60%] w-[40%] z-99" method="post">
        <h1 class="text-2xl font-bold mb-3">Tambah User</h1>
        <div class="grid grid-cols-2 w-full px-2">
            <div class="flex flex-col text-left">
                <label class="text-lg"><b>Nama Lengkap</b></label>
                <input type="text" name="nama" class="bg-blue-300 w-[95%] rounded-md placeholder:pl-2 placeholder:italic mb-4" placeholder="Your Name" require>
            </div>
            <div class="flex flex-col text-left">
                <label for="username" class="w-full text-lg font-bold">Username</label>
                <input type="text" class="bg-blue-300 w-[95%] placeholder:px-2 rounded-lg mb-3" placeholder="Your Username" name="username" id="username" required>
            </div>
            <div class="flex flex-col text-left">
                <label for="alamat" class="w-full text-lg font-bold">Alamat</label>
                <input type="text" class="bg-blue-300 w-[95%] placeholder:px-2 rounded-lg mb-3" placeholder="Your Address" name="alamat" id="alamat" required>
            </div>
            <div class="flex flex-col text-left">
                <label for="email" class="w-full text-lg font-bold">E-mail</label>
                <input type="email" class="bg-blue-300 w-[95%] placeholder:px-2 rounded-lg mb-3" placeholder="Your E-mail" name="email" id="email" required>
            </div>
            <div class="flex flex-col text-left">
                <label for="pass" class="w-full text-lg font-bold">Password</label>
                <input type="password" class="bg-blue-300 w-[95%] placeholder:px-2 rounded-lg mb-3" placeholder="Your Password" name="pass" id="pass" required>
            </div>
            <div class="flex flex-col text-left">
                <label for="level" class="w-full text-lg font-bold">level</label>
                <select name="level" id="level" class="bg-blue-300 w-[95%] placeholder:px-2 rounded-lg mb-3">
                    <option value="2">Petugas</option>
                    <option value="3">Peminjam</option>
                </select>
            </div>
        </div>
        <button type="submit" class="bg-sky-400 my-4 px-4 rounded-xl text-lg font-bold hover:-translate-y-1 duration-200 px-2">
            Tambah
        </button>
        <a href="../user.php" class="bg-red-600 rounded rounded-lg px-2">kembali</a>
    </form>
</div>

<?php
include "../../components/foot.php";
?>