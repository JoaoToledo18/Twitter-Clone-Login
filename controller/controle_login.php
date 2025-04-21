<?php

require_once('conexao.php');
session_start();

$nomeUser = $_POST['nomeUser'];
$senha = $_POST['senha'];

try {
    $sql = "SELECT * FROM tb_usuarios WHERE nome_usuario = :usuario";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':usuario', $nomeUser);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($usuario['senha'] === $senha) {
            $_SESSION['usuario'] = $usuario['nome_usuario'];
            $_SESSION['email_usuario'] = $usuario['email'];

            echo "<script>
                alert('Login realizado com sucesso!');
                window.location.href = '../index.php';
            </script>";
            exit();
        } else {
            echo "<script>
                alert('Senha incorreta.');
                window.location.href = '../view/login.php';
            </script>";
            exit();
        }
    } else {
        echo "<script>
            alert('Usuário não encontrado.');
            window.location.href = '../view/login.php';
        </script>";
        exit();
    }
} catch (PDOException $ex) {
    echo "Erro: " . $ex->getMessage();
    die();
}
?>
