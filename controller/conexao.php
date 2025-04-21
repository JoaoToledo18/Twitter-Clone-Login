<?php 

    $dsn = "mysql:dbname=bd_twitter;host=localhost";
    $usuario = "root";
    $senha = "12345678";

    try {
        $conn = new PDO($dsn, $usuario, $senha);
    } catch( PDOException $ex ){
        echo "Ocorreu um erro: " . $ex->getMessage();
        die();
    }
?>