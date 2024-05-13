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
        header("Location: page09B.php");
        exit();
    }
    $id = $_GET['id'];

    try {
        $sql = "DELETE FROM peminjam WHERE ID = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id);

        $stmt->execute();

        echo "<script>alert('Data berhasil dihapus');</script>";
        echo "<script>window.location.href = 'page09B.php';</script>";
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
</body>

</html>