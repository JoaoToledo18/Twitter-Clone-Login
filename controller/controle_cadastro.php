<?php 

    require_once('conexao.php');

    session_start();

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $nomeUser = $_POST['nomeUser'];
    $senha = $_POST['senha'];
    $tel = $_POST['tel'];
    $nasc = $_POST['nasc'];

    try {
        $sql ="insert into tb_usuarios (nome, email, nome_usuario, senha, telefone , data_nasc) VALUES (:NOME , :EMAIL, :USUARIO, :SENHA, :TEL, :NASC)";

        $stmt = $conn -> prepare($sql);

        $stmt -> bindParam(":NOME", $nome);
        $stmt -> bindParam(":EMAIL", $email);
        $stmt -> bindParam(":USUARIO", $nomeUser);
        $stmt -> bindParam(":SENHA", $senha);
        $stmt -> bindParam(":TEL", $tel);
        $stmt -> bindParam(":NASC", $nasc);

        $stmt -> execute();

        $_SESSION['email_usuario'] = $email;
        $_SESSION['usuario'] = $nomeUser;

        header("location: ../index.php");
    }catch(PDOException $ex){
        echo ("ocorreu um erro: " . $ex -> getMessage());
        die();
    }
?>