<?php

session_start();

if (!empty($_SESSION['username']) && !empty($_COOKIE['username'])) {
    header("Location: Komiku.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Irish+Grover&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="StyleKu.css?v=<?php echo time(); ?>">
    <script src="validasiForm.js"></script>
</head>

<body>
    <header>
        <div>
            <h1 style="font-family: Irish Grover; color: white;">KOMIKU READER</h1>
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
                <li><a href="">Tentang Kami</a></li>
            </ul>
        </nav>
    </header>
    <h3 style="font-family: Irish Grover; color : white;"> Selamat datang! </h3>
    <main>
        <div id="container" class="registrasi">
            <div>
                <?php if (isset($_SESSION['error'])) : ?>
                    <?php
                    $error_message = $_SESSION['error'];
                    unset($_SESSION['error']);
                    ?>
                    <p style="color: red;">Error: <?= $error_message ?></p>
                <?php endif; ?>
            </div>
            <form action="page10A_action.php" method="post" onsubmit="return validateLoginForm()">
                <label>Username:</label>
                <input type="text" name="username" id="username">

                <label>Password:</label>
                <input type="password" class="input-pw" name="password" id="password" autocomplete="off">

                <div class="remember">
                    <label>Remember me</label>
                    <input type="checkbox" name="remember" id="remember" style="width: auto; padding: 0;">
                </div>

                <div style="display: flex; margin-top: 14px;">
                    <button type="submit">Login</button>
                </div>
            </form>
            <form action="registration.php" method="post">
                <div style="display: flex; margin-top: 14px;">
                    <button type="submit">Belum punya akun</button>
                </div>
            </form>
        </div>
    </main>
    <footer>
        <p style="color: white;">Copyright &copy; 2024 Politeknik Statistika STIS</p>
        <p style="color: white;">Created by Shafnanda Aulia Kamal (222212878@stis.ac.id)</p>
    </footer>
    <script src="./navbarMenu.js"></script>
    <script src="./validasiForm.js"></script>
</body>

</html>