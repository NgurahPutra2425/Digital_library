<?php
include "components/head.php";
include "components/koneksi.php";
error_reporting(0);
?>

<div class="flex w-full h-screen items-center justify-center text-center">
    <video autoplay muted loop class="absolute inset-0 w-full h-full object-cover -z-99">
        <source src="assets/library.mp4" type="video/mp4">
        Browser Anda tidak mendukung pemutaran video.
    </video>
    <form action="action/cek-login.php"
        class="flex flex-col relative justify-center items-center border border-[3px] border-black rounded-xl h-[60%] w-[40%]"
        method="post">
        <h1 class="text-2xl font-bold mb-3">Log In</h1>
        <?php
        switch ($_GET['pesan']) {
            case 'registrasi':
                echo "<div class='bg-green-600 w-full'>Registrasi berhasil</div>";
                break;
            case 'logout':
                echo "<div class='bg-green-600 w-full'>Anda telah log out</div>";
                break;
            case 'gagal':
                echo "<div class='bg-red-600 w-full'>Login gagal, Periksa Username atau Password anda</div>";
                break;
            case 'akun':
                echo "<div class='bg-red-600 w-full'>Teradi kesalahan pada akun, Silahkan melakukan registrasi</div>";
                break;
            case 'login':
                echo "<div class='bg-red-600 w-full'>Silahkan login terlebih dahulu</div>";
                break;
            case 'admin':
                echo "<div class='bg-red-600 w-full'>Anda tidak miliki akses ke halaman ini</div>";
                break;
            case 'petugas':
                echo "<div class='bg-red-600 w-full'>Anda tidak miliki akses ke halaman ini</div>";
                break;
            case 'user':
                echo "<div class='bg-red-600 w-full'>Anda tidak miliki akses ke halaman ini</div>";
                break;
            default:
                break;
        }
        ?>
        <label for="username" class="w-full text-lg font-bold">Username</label>
        <input type="text" class="bg-blue-300 w-[75%] placeholder:px-2 rounded-lg mb-3" placeholder="Your Username"
            name="username" id="username" required>
        <label for="pass" class="w-full text-lg font-bold">Password</label>
        <input type="password" class="bg-blue-300 w-[75%] placeholder:px-2 rounded-lg mb-3" placeholder="Password"
            name="pass" id="pass" required>
        <button type="submit"
            class="w-20 bg-sky-400 my-4 rounded-xl text-lg font-bold hover:-translate-y-1 duration-200 px-2">
            Login
        </button>
        <a href="register.php" class="text-blue-800 underline hover:text-orange-300">Registrasi akun</a>
    </form>
</div>

<?php
include "components/foot.php";
?>