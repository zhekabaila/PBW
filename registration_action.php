<?php
session_start();

include 'dbcon.php'; // Menghubungkan ke database dengan PDO

if (isset($_POST['register'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if (empty($username) || empty($password)) {
        $_SESSION['error'] = "Username dan Password harus diisi!";
        header("Location: registration.php");
        exit();
    } else {
        $findUsername = $pdo->query("SELECT * FROM user WHERE username = '$username'")->fetchAll(PDO::FETCH_ASSOC);
        $isUsernameExist = count($findUsername) > 0;

        if ($isUsernameExist) {
            $_SESSION['error'] = "User dengan username: $username sudah tersedia, silahkan pilih username yang lain!";
            header("Location: registration.php");
            exit();
        }

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        try {
            // Menyiapkan dan mengeksekusi statement SQL dengan PDO
            $stmt = $pdo->prepare("INSERT INTO user (username, password) VALUES (?, ?)");
            $stmt->execute([$username, $hashed_password]);

            // Registrasi berhasil, mengarahkan ke halaman login
            header("Location: page10A.php");
            exit();
        } catch (PDOException $e) {
            // Menangani error saat eksekusi statement SQL
            $_SESSION['error'] = "Error: " . $e->getMessage();
            header("Location: registration.php");
            exit();
        }
    }
}
