<?php
include "components/head.php";
include "components/koneksi.php";
?>

<div class="flex w-full h-screen items-center justify-center text-center">
    <video autoplay muted loop class="absolute inset-0 w-full h-full object-cover -z-99">
        <source src="assets/library.mp4" type="video/mp4">
        Browser Anda tidak mendukung pemutaran video.
    </video>
    <form action="./action/registrasi.php"
        class="flex flex-col relative justify-center items-center border border-[3px] border-black rounded-xl h-[60%] w-[40%] z-99"
        method="post">
        <h1 class="text-2xl font-bold mb-3">Registrasi</h1>
        <div class="grid grid-cols-2 w-full px-2">
            <div class="flex flex-col text-left">
                <label class="text-lg"><b>Nama Lengkap</b></label>
                <input type="text" name="nama"
                    class="bg-blue-300 w-[95%] rounded-md placeholder:pl-2 placeholder:italic mb-4"
                    placeholder="Your Name" require>
            </div>
            <div class="flex flex-col text-left">
                <label for="username" class="w-full text-lg font-bold">Username</label>
                <input type="text" class="bg-blue-300 w-[95%] placeholder:px-2 rounded-lg mb-3"
                    placeholder="Your Username" name="username" id="username" required>
            </div>
            <div class="flex flex-col text-left">
                <label for="alamat" class="w-full text-lg font-bold">Alamat</label>
                <input type="text" class="bg-blue-300 w-[95%] placeholder:px-2 rounded-lg mb-3"
                    placeholder="Your Address" name="alamat" id="alamat" required>
            </div>
            <div class="flex flex-col text-left">
                <label for="email" class="w-full text-lg font-bold">E-mail</label>
                <input type="email" class="bg-blue-300 w-[95%] placeholder:px-2 rounded-lg mb-3"
                    placeholder="Your E-mail" name="email" id="email" required>
            </div>
        </div>
        <label for="pass" class="w-full text-lg font-bold">Password</label>
        <input type="password" class="bg-blue-300 w-[50%] placeholder:px-2 rounded-lg mb-3" placeholder="Your Password"
            name="pass" id="pass" required>
        <button type="submit"
            class="bg-sky-400 my-4 px-4 rounded-xl text-lg font-bold hover:-translate-y-1 duration-200 px-2">
            Registrasi
        </button>
        <a href="index.php" class="text-blue-800 underline hover:text-orange-300">Log in</a>
    </form>
</div>

<?php
include "components/foot.php";
?>