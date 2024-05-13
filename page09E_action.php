<!DOCTYPE html>
<html lang='en-GB'>
<head>
    <title>Koneksi Database</title>
</head>
<body>
    <h1>PHP Action</h1>
    <?php
        include 'dbcon.php';
        try {
            $id = $_POST['id'];
            $nama = $_POST['nama'];
            $email = $_POST['email'];

            $sql = "UPDATE peminjam SET nama = :nama, email = :email WHERE ID = :id";

            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':nama', $nama);
            $stmt->bindParam(':email', $email);

            $stmt->execute();

            echo "<script>alert('Data Berhasil Diupdate');</script>";
            echo "<script>window.location.href = 'page09B.php';</script>";

            $pdo = NULL;
        } catch (PDOException $e) {
            exit("PDO Error: " . $e->getMessage() . "<br>");
        }
    ?>
</body>
</html>
