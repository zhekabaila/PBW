<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: page10A.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang='en-GB'>

<head>
    <title>Koneksi Database</title>
    <!-- Shafnanda Aulia Kamal (32)
    222212878 - 2KS4 -->
</head>

<body>
    <?php
    include 'dbcon.php';

    if (!isset($_GET['id'])) {
        header("Location: page09A.php");
        exit();
    }
    $id = $_GET['id'];

    try {
        // Ambil nama file gambar sebelum menghapus data komik
        $sql_get_image = "SELECT sampul FROM komik WHERE id = :id";
        $stmt_get_image = $pdo->prepare($sql_get_image);
        $stmt_get_image->bindParam(':id', $id);
        $stmt_get_image->execute();
        $image_row = $stmt_get_image->fetch(PDO::FETCH_ASSOC);
        $namaFile = $image_row['sampul'];

        // Hapus data komik dari database
        $sql = "DELETE FROM komik WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        // Hapus file gambar dari folder img
        unlink('./img/' . $namaFile);

        echo "<script>alert('Komik berhasil dihapus');</script>";
        echo "<script>window.location.href = 'page09A.php';</script>";
    } catch (PDOException $e) {
        exit("PDO Error: " . $e->getMessage() . "<br>");
    }
    ?>
    <button onclick="return confirmDelete()">Hapus</button>
    <script>
        function confirmDelete() {
            return confirm("Apakah anda yakin menghapus elemen ini?");
        }
    </script>
    <script src="./navbarMenu.js"></script>

</body>

</html>