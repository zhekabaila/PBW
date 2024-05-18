<?php
include './dbcon.php';

try {
    $keyword = $_GET["keyword"];
    $stmt = $pdo->prepare("SELECT nama FROM peminjam WHERE nama LIKE ?");
    $stmt->execute(["%$keyword%"]);

    $hints = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // lookup all hints if query result is not empty
    if ($stmt->rowCount() > 0) {
        $response = [];

        foreach ($hints as $hint) {
            $response[] = [
                'nama' => $hint['nama']
            ];
        }

        header("Content-Type: application/json");
        echo json_encode($response);
        exit();
    } else { // Output "no suggestion" if no hint was found or output
        // correct values
        $response[] = [
            'nama' => 'no suggestion'
        ];

        header('Content-type: application/json');
        echo json_encode($response);
        exit();
    }

    $pdo = NULL;
} catch (PDOException $e) {
    exit("PDO Error: " . $e->getMessage() . "<br>");
}
