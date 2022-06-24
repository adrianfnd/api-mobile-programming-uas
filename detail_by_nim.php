<?php
    header('Content-Type: Application/json; charset=UTF-8');
    header('Access-Control-Allow-Headers: Access-Control-Allow-Origin, Accept' );
    include "koneksi_db.php";

    $nim = (int) $_POST['nim'];

    $stmt = $db->prepare("SELECT nama, jurusan FROM profile WHERE nim = ?");
    $stmt->execute( [$nim]) ;
    $result =$stmt->fetch(PDO:: FETCH_ASSOC);
    
    echo json_encode([
        'result' => $result
    ]);
?>    
