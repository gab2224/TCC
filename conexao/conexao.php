<?php

    $hostname = "db4free.net";
    $dbname = "teste024";
    $username = "gabsobral24";
    $password ="12345678";

    try {
        $conn = new PDO('mysql:host='.$hostname.';dbname='.$dbname, $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo 'A conexão com o banco de dados '.$dbname.', foi realizado com sucesso';
    } catch (PDOException $e) {
        echo 'Error: '.$e->getMessage();
    }