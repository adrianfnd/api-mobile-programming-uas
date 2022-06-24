<?php
    header('Content-Type: Application/json; charset=UTF-8');
    header('Access-Control-Allow-Headers: Access-Control-Allow-Origin, Accept');
    include "koneksi_db. php";

    //$nim = (int) $_POST['nim'];
    $nim= (int) ($_POST["nim"]);
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];

    $stmt = $db->prepare("UPDATE profile SET nama = ?, jurusan = ? WHERE nim = ?");
    $result = $stmt->execute ([$nama, $jurusan, $nim]);

    echo json_encode([
        'success' => $result
    ]);
?>