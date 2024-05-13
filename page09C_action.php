<?php
include 'dbcon.php';

if (isset($_FILES['sampul'])) {
    try {
        $id = $_POST['nomor'];
        $judul = $_POST['judul'];
        $namaFile = uniqid() . '_' . $_FILES['sampul']['name'];
        $lokasiSementara = $_FILES['sampul']['tmp_name'];
        $pratinjau = $_POST['pratinjau'];

        // Tentukan lokasi file akan dipindahkan
        $dirUpload = "./img/";

        // Pindahkan file dari lokasi sementara ke direktori upload
        if (move_uploaded_file($lokasiSementara, $dirUpload . $namaFile)) {
            // Jika pengunggahan berhasil, masukkan data ke database
            $sql = "INSERT INTO komik (id, judul, sampul, pratinjau) VALUES (:id, :judul, :sampul, :pratinjau)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':judul', $judul);
            $stmt->bindParam(':sampul', $namaFile);
            $stmt->bindParam(':pratinjau', $pratinjau);
            $stmt->execute();

            echo "<script>alert('Komik Berhasil Ditambahkan');</script>";
            echo "<script>window.location.href = 'page09A.php';</script>";
        } else {
            // Jika pengunggahan gagal
            echo "<script>alert('Maaf, terjadi kesalahan saat mengunggah gambar. Silakan coba lagi.');</script>";
        }
    } catch (PDOException $e) {
        exit("PDO Error: " . $e->getMessage() . "<br>");
    }
}
