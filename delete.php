<?php
    header('Content-Type: Application/json; charset=UTF-8');
    header('Access-Control-Allow-Headers: Access-Control-Allow-Origin, Accept');
    include "koneksi_db.php";

    $nim = (int) $_POST['nim'];
    $stmt = $db->prepare("DELETE FROM profile WHERE nim = ?");
    $result = $stmt->execute([$nim]);

    echo json_encode([
        'nim' => $nim,
        'success' => $result
    ]);
?>    