<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../public/css/estiloLogin.css">
    <title>Login - Twitter</title>
</head>
<body class="fundo">
    <div class="container">
        <div class="row justify-content-center align-items-center vh-100">
            <div class="fundoForm col-6">
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-6">
                        <img src="../public/img/logo.png" class="logo rounded mx-auto d-block" alt="logo Twitter">
                    </div>
                    <div class="col-3"></div>
                </div>
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-6">
                        <h2 class="text-center">Entrar no Twitter</h2>
                    </div>
                    <div class="col-3"></div>
                </div>
                <form action="../controller/controle_login.php" method="POST">
                    <div class="row">
                        <div class="col-3"></div>
                        <div class="col-6">
                            <label for="nomeUser" class="col-12 tamanho-campo">Nome de usuário:</label>
                            <input type="text" name="nomeUser" id="id_nomeUser" class="col-12">
                        </div>
                        <div class="col-3"></div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-3"></div>
                        <div class="col-6">
                            <label for="senha" class="col-12 tamanho-campo">Senha:</label>
                            <input type="password" name="senha" id="id_senha" class="col-12">
                        </div>
                        <div class="col-3"></div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-3"></div>
                        <div class="col-6">
                            <button type="submit" class="btn btn-outline-primary col-12">Entrar</button>
                        </div>
                        <div class="col-3"></div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-3"></div>
                        <div class="col-6 text-center">
                            <span>Não tem uma conta?</span>
                            <a href="cadastro.php">Cadastre-se</a>
                        </div>
                        <div class="col-3"></div>
                    </div>
                    <br>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
