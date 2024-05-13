<?php
include 'dbcon.php';

// var_dump($_POST, $_FILES);
// var_dump(empty($_FILES['sampul']['name']));

try {
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $pratinjau = $_POST['pratinjau'];
    $old_sampul = $_POST['old_sampul'];

    if (!empty($_FILES['sampul']['name'])) {
        $lokasiSementara = $_FILES['sampul']['tmp_name'];
        $dirUpload = "./img/";
        $sampul = uniqid() . '_' . $_FILES['sampul']['name'];
        unlink('./img/' . $_POST['old_image']);
        move_uploaded_file($lokasiSementara, $dirUpload . $sampul);

        $sql = "UPDATE komik SET judul = :judul, sampul = :sampul, pratinjau = :pratinjau WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':judul', $judul);
        $stmt->bindParam(':sampul', $sampul);
        $stmt->bindParam(':pratinjau', $pratinjau);
        $stmt->execute();
    } else {
        $sql = "UPDATE komik SET judul = :judul, pratinjau = :pratinjau WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':judul', $judul);
        $stmt->bindParam(':pratinjau', $pratinjau);
        $stmt->execute();
    }

    echo "<script>alert('Data berhasil diupdate');</script>";
    echo "<script>window.location.href = 'page09A.php';</script>";

    $pdo = NULL;
} catch (PDOException $e) {
    exit("PDO Error: " . $e->getMessage() . "<br>");
}
