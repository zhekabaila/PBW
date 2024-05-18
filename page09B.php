<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: page10A.php");
    exit;
}

include 'dbcon.php';

$query = "SELECT * FROM peminjam";

if (!empty($_GET['search'])) {
    $query = "SELECT * FROM peminjam WHERE nama LIKE '%" . $_GET['search'] . "%'";
}

$result = $pdo->query($query);
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
                <input type="text" name="search" value="<?= $_GET['search'] ?? '' ?>" id="txt1" onkeyup="showHint(this.value)" autocomplete="off" autofocus required>
                <button type="submit">Cari</button>
            </div>
            <div style="width: 100%; max-width: 1200px; margin: 24px auto;">
                <p style="color: white; font-size: 18px; font-weight: bold; margin-bottom: 24px;">
                    Suggestions:
                </p>
                <ul id="txtHint" style="color: white; font-size: 16px; font-weight: semibold; list-style-type: none;">

                </ul>
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
            <tbody>
                <?php
                if ($result->rowCount() > 0) {
                    foreach ($result as $row) { ?>
                        <tr>
                            <td><?php echo $row["id"]; ?></td>
                            <td><?php echo $row["nama"]; ?></td>
                            <td><?php echo $row["email"]; ?></td>
                            <td>
                                <div style="display: flex; justify-content: center; align-items: center; gap: 12px; height: 100%;">
                                    <a href='page09E.php?id=<?php echo $row["id"]; ?>&nama=<?php echo $row["nama"]; ?>&email=<?php echo $row["email"]; ?>'><img src='edit-icon.png' style='width:30px;height:30px;'></a>
                                    <a href='page09F.php?id=<?php echo $row["id"]; ?>' onclick='return confirmDelete()'><img src='delete-icon.png' style='width:30px;height:30px;'></a>
                                </div>
                            </td>
                        </tr>
                <?php   }
                } else {
                    echo "<tr><td colspan='4' style='text-align: center; color: red;'>Tidak ada data peminjam</td></tr>";
                }
                ?>
                <tr>
                    <td colspan="4">
                        <button onclick="window.location.href='page09D.php'">Tambah Peminjam</button>
                    </td>
                </tr>
            </tbody>
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