<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Irish+Grover&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="StyleKu.css?v=<?php echo time(); ?>">
    <script src="validasiForm.js"></script>
</head>

<body>
    <header>
        <div>
            <h1 style="display: flex; align-items: center; gap: 12px;">
                <img src="./icon.png" alt="" style="width: 80px; height: 80px;">
                <span style="font-family: Irish Grover; color: white;">
                    KOMIKU READER
                </span>
            </h1>
            <button type="button" id="burger-menu" style="padding: 0; background-color: transparent;">
                <img src="./HiMenu.svg" alt="" style="width: 26px;">
            </button>
            <button type="button" id="close-menu" style="display: none; padding: 0; background-color: transparent;">
                <img src="./HiOutlineX.svg" alt="" style="width: 26px;">
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
            <form name="registrationForm" action="registration_action.php" method="post" onsubmit="return validateRegist()">
                <label>Username:</label>
                <input type="text" name="username">

                <label>Password:</label>
                <input type="password" class="input-pw" name="password" autocomplete="off">

                <div style="display: flex; margin-top: 14px;">
                    <button type="submit" name="register">Registrasi</button>
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