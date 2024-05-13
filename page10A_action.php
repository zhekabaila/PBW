<?php
session_start();

include 'dbcon.php';

try {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE username = :username";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($password === $user['password']) {
            $_SESSION['username'] = $username;
            header('Location: Komiku.php', true);
            exit;
        } else {
            $_SESSION['error'] = "Username/Password salah";
            echo "<script>window.location.href = 'page10A.php';</script>";
            exit;
        }
    } else {
        $_SESSION['error'] = "Username/Password Tidak Ditemukan";
        echo "<script>window.location.href = 'page10A.php';</script>";
        exit;
    }
} catch (PDOException $e) {
    echo "Koneksi gagal:" . $e->getMessage();
}
