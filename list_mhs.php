<?php
    header('Content-Type: Application/json; charset=UTF-8');
    header('Access-Control-Allow-Headers: Access-Control-Allow-Origin, Accept');
    include "koneksi db.php";

    $stmt = $db->prepare("SELECT nim, nama, jurusan FROM profile");
    $stmt->execute();
    $result = $stmt->fetchA11(PDO:: FETCH_ASSOC) ;
    echo json_encode($result);
?>
