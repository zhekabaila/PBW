<!DOCTYPE html> <html lang='en-GB'>
<head>
<title>Koneksi Database</title>
    <!-- Shafnanda Aulia Kamal (32)
    222212878 - 2KS4 -->
</head>
<body>
<?php
    $db_hostname = "localhost"; // Write your own db server here
    $db_database = "nandaDB"; // Write your own db name here
    $db_username = "root"; // Write your own username here
    $db_password = ""; // Write your own password here
    $db_charset = "utf8mb4"; // Optional
    $dsn = "mysql:host=$db_hostname;dbname=$db_database;charset=$db_charset";
    $opt = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, //Pakai array associate
        PDO::ATTR_EMULATE_PREPARES => false
        );
            try {
            $pdo = new PDO($dsn,$db_username,$db_password,$opt); //Sintaks untuk mengoneksikan
            //$pdo = NULL;
            }
            catch (PDOException $e) {
            exit("PDO Error: ".$e->getMessage()."<br>");
            }
?>
</body>
</html>