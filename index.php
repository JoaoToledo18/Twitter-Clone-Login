<?php
// Inicia a sessão
session_start();

// Verifica se o usuário está logado
$usuario_logado = isset($_SESSION['usuario']); // ou $_SESSION['email_usuario'] caso você prefira o e-mail
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="./public/css/estiloTwitter.css">
    <link rel="stylesheet" href="./public/css/estilo.css">
    <title>Twitter</title>
</head>
<body class="fundo">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a href=""><img src="./public/img/logo.png" class="logo" alt=""></a>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <div class="container">
        <br>
        <div class="row fundoCont">
            <h3>Postagens</h3>
            <article>
                <h5>Post 01</h5>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque voluptatem voluptas
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit ipsam quisquam quidem necessitatibus nulla nobis possimus laboriosam, assumenda autem reprehenderit suscipit quam quo unde animi veritatis quis iure delectus exercitationem?
                </p>
                <a href="" class="comentar">Comentar</a>
            </article>
            <article>
                <h5>Post 02</h5>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque voluptatem voluptas
                </p>
                <a href="">Comentar</a>
            </article>
        </div>
    </div>

    <div class="footer-fixo">
    <div class="card text-center">
        <div class="card-body">
            <?php if ($usuario_logado): ?>
                <div>
                    <strong>Olá, <?php echo $_SESSION['usuario']; ?>!</strong>
                    <p class="mb-0">Deseja sair da conta?</p>
                </div>
                <a href="controller/finalizar_sessao.php" class="btn btn-danger">Finalizar Sessão</a>
            <?php else: ?>
                <p class="mb-0">Fazer login ou cadastrar</p>
                <div>
                    <a href="views/cadastro.php" class="btn btn-primary me-2">Cadastrar</a>
                    <a href="views/login.php" class="btn btn-primary">Login</a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

</body>
</html>
