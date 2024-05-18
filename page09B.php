<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: page10A.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peminjam</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Irish+Grover&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="StyleKu.css?v=<?php echo time(); ?>">
</head>

<body>
    <header>
        <div>
            <div style="display: flex; justify-content: space-between; align-items: center; width: 100%;">
                <a href="#" class="invisible-button">Logout</a>
                <h1 style="font-family: Irish Grover;">KOMIKU READER</h1>
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
                <li><a href="page09B.php" class="active-menu">Daftar Peminjam</a></li>
                <li><a href="page09D.php">Tambah Peminjam</a></li>
                <li><a href="page09C.php">Tambah Komik</a></li>
                <li class="large-only"><a href="page09C.php">Logout</a></li>
            </ul>
        </nav>
    </header>

    <main style="overflow-x: scroll;">
        <form action="" method="GET">
            <label for="txt1" style="font-weight: 500;">Cari Nama: </label>
            <div style="display: flex; align-items: center;">
                <input type="text" name="search" id="txt1" onkeyup="showHint(this.value)" autocomplete="off" autofocus required>
            </div>
        </form>

        <table class="peminjam">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody id="tbody"></tbody>
        </table>
    </main>
    <footer>
        <p style="color: white;">Copyright &copy; 2024 Politeknik Statistika STIS</p>
        <p style="color: white;">Created by Shafnanda Aulia Kamal (222212878@stis.ac.id)</p>
    </footer>
    <script>
        function confirmDelete() {
            return confirm("Apakah anda yakin menghapus elemen ini?");
        }
    </script>
    <script src="./navbarMenu.js"></script>
    <script src="page11A_suggestion.js"></script>
</body>

</html>