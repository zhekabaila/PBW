<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: page10A.php");
    exit;
}

include 'dbcon.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penambahan Komik</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Irish+Grover&display=swap" rel="stylesheet">
    <script src="validasiForm.js"></script>
    <link rel="stylesheet" href="StyleKu.css?v=<?php echo time(); ?>">
</head>

<body>
    <header>
        <div>
            <div style="display: flex; justify-content: space-between; align-items: center; width: 100%;">
                <a href="#" class="invisible-button">Logout</a>
                <h1 style="display: flex; align-items: center; gap: 12px;">
                    <img src="./icon.png" alt="" style="width: 80px; height: 80px;">
                    <span style="font-family: Irish Grover;">
                        KOMIKU READER
                    </span>
                </h1>
                <a href="page10B.php" class="visible-button">Logout</a>
            </div>
            <button type="button" id="burger-menu" style="padding: 0; background-color: transparent;">
                <img src="./HiMenu.svg" alt="" style="width: 26px;">
            </button>
            <button type="button" id="close-menu" style="display: none; padding: 0; background-color: transparent;"">
                <img src=" ./HiOutlineX.svg" alt="" style="width: 26px;">
            </button>
        </div>
        <nav id="mainNav">
            <ul>
                <li><a href="Komiku.php">Beranda</a></li>
                <li><a href="page09A.php">Daftar Komik</a></li>
                <li><a href="page09B.php">Daftar Peminjam</a></li>
                <li><a href="page09D.php">Tambah Peminjam</a></li>
                <li><a href="page09C.php" class="active-menu">Tambah Komik</a></li>
                <li class="large-only"><a href="page09C.php">Logout</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div id="container" class="registrasi">
            <p id="pesanError" class="errorMessage"></p>
            <form action="page09C_action.php" method="post" name="formTambahKomik" onSubmit="return validate06C()" enctype="multipart/form-data">
                <label for="nomor">ID:</label>
                <input type="text" id="nomor" name="nomor">
                <span id="errorNomor" class="errorMessage"></span>

                <label for="judul">Judul:</label>
                <input type="text" id="judul" name="judul">
                <span id="errorJudul" class="errorMessage"></span>

                <label for="sampul">Sampul:</label>
                <input type="file" id="sampul" name="sampul" accept="image/*">

                <label for="pratinjau">Pratinjau:</label>
                <textarea id="pratinjau" name="pratinjau"></textarea>

                <div style="display: flex; margin-top: 24px;">
                    <button type="submit">Tambahkan</button>
                </div>
            </form>
        </div>
    </main>


    <footer>
        <p style="color: white;">Copyright &copy; 2024 Politeknik Statistika STIS</p>
        <p style="color: white;">Created by Shafnanda Aulia Kamal (222212878@stis.ac.id)</p>
    </footer>
    <script src="./navbarMenu.js"></script>
</body>

</html>