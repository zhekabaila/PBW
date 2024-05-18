<?php

include './dbcon.php';

try {
    if (!empty($_GET["keyword"])) {
        $keyword = $_GET["keyword"];

        $stmt = $pdo->prepare("SELECT * FROM peminjam WHERE nama LIKE ?");
        $stmt->execute(["%$keyword%"]);
    } else {
        $stmt = $pdo->prepare("SELECT * FROM peminjam");
        $stmt->execute();
    }

    $hints = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // lookup all hints if query result is not empty
    if ($stmt->rowCount() > 0) {
        $response = [];

        foreach ($hints as $hint) {
            $response[] = [
                'id' => $hint['id'],
                'nama' => $hint['nama'],
                'email' => $hint['email']
            ];
        }

        header("Content-Type: application/json");
        echo json_encode($response);
        exit();
    } else { // Output "no suggestion" if no hint was found or output
        // correct values
        $response[] = [
            'id' => null,
            'nama' => null,
            'email' => null,
        ];

        header('Content-type: application/json');
        echo json_encode($response);
        exit();
    }

    $pdo = NULL;
} catch (PDOException $e) {
    exit("PDO Error: " . $e->getMessage() . "<br>");
}
