<?php
    $servername ="db4free.net";
    $username = "ymama4140";
    $password = "APAajah1";
    $dbname = "ymama4140";

    $db=new PDO("mysql:host=[$servername); dbname=($dbname);
    charset=utf8", $username, $password);
    if(!$db){
        echo"Failed Connection";
    }
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>