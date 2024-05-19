<?php
include 'dbcon.php';
?>
<!DOCTYPE html>
<html lang='en-GB'>

<head>
    <title>Koneksi Database</title>
    <!-- Shafnanda Aulia Kamal (32)
    222212878 - 2KS4 -->
</head>

<body>
    <h1>PHP Action</h1>
    <?php
    include 'dbcon.php';
    try {
        $nama = $_POST['nama'];
        $email = $_POST['email'];

        $sql = "INSERT INTO peminjam (nama, email) VALUES (:nama, :email)";

        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nama', $nama);
        $stmt->bindParam(':email', $email);

        $stmt->execute();

        echo "<script>alert('Data Berhasil Ditambahkan');";
        echo "window.location.href = 'page09B.php';</script>";
    } catch (PDOException $e) {
        exit("PDO Error: " . $e->getMessage() . "<br>");
    }
    ?>
</body>

</html>