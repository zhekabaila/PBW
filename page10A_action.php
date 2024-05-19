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

        if (password_verify($password, $user['password'])) {
            $_SESSION['username'] = $username;

            if (isset($_POST['remember'])) {
                setcookie('username', $username, time() + 60);
                setcookie('password', $password, time() + 60);
            }

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
