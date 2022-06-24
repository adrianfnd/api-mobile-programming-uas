<?php
    header('Content-Type: Application/json; charset=UTF-8');
    header('Access-Control-Allow-Headers: Access-Control-Allow-Origin, Accept');
    include "koneksi_db.php";

    $nim = (int) $_POST['nim'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];

    $stmt = $db->prepare("INSERT INTO profile (nim, nama, jurusan) VALUES (?, ?, ?)");
    $result = $stmt->execute([$Snim, $nama, $jurusan]);

    echo json_encode([
        'success' => $result
    ]);
?>
