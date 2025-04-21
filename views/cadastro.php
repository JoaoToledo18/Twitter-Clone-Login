<?php ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/css/estiloCadastro.css">
    <title>Twitter</title>
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
                        <h2 class="text-center">Cadastrar no Twitter</h2>
                    </div>
                    <div class="col-3"></div>
                </div>
                <form action="../controller/controle_cadastro.php" method="POST">
                    <div class="row">
                        <div class="col-3"></div>
                        <div class="col-6">
                            <label for="nome" class="col-12 tamanho-campo">Nome completo</label>
                        </div>
                        <div class="col-3"></div>
                    </div>
                    <div class="row">
                        <div class="col-3"></div>
                        <div class="col-6">
                            <input type="text" name="nome" id="id_nome" class="col-12">
                        </div>
                        <div class="col-3"></div>
                    </div>
                    <div class="row">
                        <div class="col-3"></div>
                        <div class="col-6">
                            <label for="email" class="col-12 tamanho-campo">Cadastre um e-mail</label>
                        </div>
                        <div class="col-3"></div>
                    </div>
                    <div class="row">
                        <div class="col-3"></div>
                        <div class="col-6">
                            <input type="email" name="email" id="id_email" class="col-12">
                        </div>
                        <div class="col-3"></div>
                    </div>
                    <div class="row">
                        <div class="col-3"></div>
                        <div class="col-6">
                            <label for="nomeUser" class="col-12 tamanho-campo">Crie um nome de usuario:</label>
                        </div>
                        <div class="col-3"></div>
                    </div>
                    <div class="row">
                        <div class="col-3"></div>
                        <div class="col-6">
                            <input type="text" name="nomeUser" id="id_nomeUser" class="col-12">
                        </div>
                        <div class="col-3"></div>
                    </div>
                    <div class="row">
                        <div class="col-3"></div>
                        <div class="col-6">
                            <label for="senha" class="col-12 tamanho-campo">Digite sua senha:</label>
                        </div>
                        <div class="col-3"></div>
                    </div>
                    <div class="row">
                        <div class="col-3"></div>
                        <div class="col-6">
                            <input type="password" name="senha" id="id_senha" class="col-12">
                        </div>
                        <div class="col-3"></div>
                    </div>
                    <div class="row">
                        <div class="col-3"></div>
                        <div class="col-6">
                            <label for="tel" class="col-12 tamanho-campo">Telefone:</label>
                        </div>
                        <div class="col-3"></div>
                    </div>
                    <div class="row">
                        <div class="col-3"></div>
                        <div class="col-6">
                            <input type="text" name="tel" id="id_tel" class="col-12">
                        </div>
                        <div class="col-3"></div>
                    </div>
                    <div class="row">
                        <div class="col-3"></div>
                        <div class="col-6">
                            <label for="nasc" class="col-12 tamanho-campo">Data de nascimento</label>
                        </div>
                        <div class="col-3"></div>
                    </div>
                    <div class="row">
                        <div class="col-3"></div>
                        <div class="col-6">
                            <input type="date" name="nasc" id="id_nasc" class="col-12">
                        </div>
                        <div class="col-3"></div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-3"></div>
                        <div class="col-6">
                            <button type="submit" class="btn btn-outline-primary col-12">Avançar</button>
                        </div>
                        <div class="col-3"></div>
                    </div>
                    <div class="row">
                        <div class="col-3"></div>
                        <div class="col-6">
                            <span>Já tem uma conta?</span>
                            <span><a href="index.php">Inscreva-se</a></span>
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
