<?php

        include_once('conexao.php');

        if(isset($_POST['submit'])){

            

            $nome = $_POST['nome'];
            $sobrenome = $_POST['sobrenome'];
            $email = $_POST['email'];
            $telefone = $_POST['telefone'];
            $nascimento = $_POST['nascimento'];
            $cpf = $_POST['cpf'];
            $endereco = $_POST['endereco'];
            $estado = $_POST['estado'];
            $cidade = $_POST['cidade'];
            $sexo = $_POST['sexo'];
            $senha = $_POST['senha'];

            $resulte = mysqli_query($conexao, "INSERT INTO login(cpf, senha) VALUES ('$cpf', '$senha')");

            $result = mysqli_query($conexao, "INSERT INTO alunos(NOME, SOBRENOME, EMAIL, TELEFONE, NASCIMENTO, ENDERECO, ESTADO, CIDADE, SEXO)
                                      VALUES ('$nome', '$sobrenome', '$email', '$telefone', '$nascimento', '$endereco', '$estado', '$cidade', '$sexo')");
        }


?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
    <!-- Estilos -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="Cadastro.css">
    <!-- Scripts-->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/bf7e05c402.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
    <script src="https://kit.fontawesome.com/546ab0e97a.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <div class="container" id="nav-container">
            <nav class="navbar navbar-expand-lg fixed-top">
                <a href="/Trabalho final/index/index.html" class="navbar-brand">
                    <img id="logo" src="logo/logo_10-removebg-preview.png" alt="hDC Agency">
                </a>
                <button id="botao" class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbar-links" aria-controls="navbar-links" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span id="btn" class="navbar-toggler-icon">|||</span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
                    <div class="navbar-nav">
                        <a href="/Trabalho final/unidades/unidades.html" class="nav-item nav-link" id="about-menu">Unidades</a>
                        <a href="/Trabalho final/login/Login.php" class="nav-item nav-link" id="team-menu">Area do
                            Aluno</a>
                        <a href="/Trabalho final/cadastro/Cadastro.php" class="nav-item nav-link"
                            id="services-menu">Matricule-se</a>
                        <a href="/Trabalho final/atendimento/Atedimento.html" class="nav-item nav-link" id="contact-menu">Fale
                            Conosco</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <main>
        <h1>Cadastro de Aluno</h1>
        <form action="Cadastro.php" method="POST" id="registerForm" onsubmit="pegarValores()">
            <div class="row">
                <div class="col">
                    <input id="nome" name="nome" type="text" class="form-control" placeholder="Primeiro Nome" >
                </div>
                <div class="col">
                    <input id="sobrenome" name="sobrenome" type="text" class="form-control" placeholder="Sobrenome" >
                </div>
                <div class="col">
                    <input id="email" name="email" type="email" class="form-control" placeholder="Email" >
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input id="telefone" name="telefone" type="tel" class="form-control" placeholder="Telefone - Celular">
                </div>
                <div class="col">
                    <input id="nascimento" name="nascimento" type="date" class="form-control">

                </div>
                <div class="col">
                    <input id="cpf" type="number" name="cpf" class="form-control" placeholder="cpf" >
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input id="endereco" type="text" name="endereco" class="form-control" placeholder="Endereço">
                </div>
                <div class="col">
                    <input id="estado" type="text" name="estado" class="form-control" placeholder="Estado">
                </div>
                <div class="col">
                    <input id="cidade" type="text" name="cidade" class="form-control" placeholder="Cidade">
                </div>
            </div>
            <div id="quarta-linha">
                <div id="sele" class="row">
                    <div class="col">
                        <select id="sexo" name="sexo" class="custom-select" style="width: 200px;" >
                            <option selected>Sexo</option>
                            <option value="M">Masculino</option>
                            <option value="F">Feminino</option>
                            <option value="I">Indefinido</option>
                        </select>
                    </div>
                </div>
                <div id="div-senha" class="col">
                    <input id="senha" name="senha" type="password" class="form-control" placeholder="Senha" onchange="comparar()" required>
                </div>
                <div class="col">
                    <input id="senha-dois" name="senhaconf" type="password" class="form-control" placeholder="Confirme sua Senha" onchange="comparar()" required>
                </div>
            </div>
            <input id="submit" name="submit" class="btn btn-primary" type="submit"></input>
        </form>



    </main>
    <footer id="rodape-geral" class="page-footer">
        <div style="height: 150px;">
            <div id="rodape" class="container">
                <div class="row py-4 d-flex align-items-center">
                    <div class="col-md-12 text-center">
                        <a href="#"><i class="fa-brands fa-facebook text-white mr-4"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram text-white mr-4"></i></a>
                        <a href="https://www.linkedin.com/in/fabr%C3%ADcio-de-jesus-868b5122a/"><i
                                class="fa-brands fa-linkedin text-white mr-4"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter text-white mr-4"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div id="sub-rodape" class="container text-center text-md-left">
            <div class="row">
                <div id="rodape-coluna-1" class="col-md-3 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold">Braço de Ferro</h6>
                    <hr class="bg-danger mb-4 mt-0 d-inline-block mx-auto" style="width: 135px; height: 2px">
                    <p class="conteudo-rodape">aaaaaaaaaaaaaaaaaaaaaa</p>
                </div>
                <div id="rodape-coluna-2" class="col-md-2 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold">Braço de Ferro</h6>
                    <hr class="bg-danger mb-4 mt-0 d-inline-block mx-auto" style="width: 135px; height: 2px">
                    <ul class="list-unstyled">
                        <li class="my-2"><a class="conteudo-rodape" href="#">HTML</a></li>
                        <li class="my-2"><a class="conteudo-rodape" href="#">CSS</a></li>
                        <li class="my-2"><a class="conteudo-rodape" href="#">JAVASCRIPT</a></li>
                        <li class="my-2"><a class="conteudo-rodape" href="#">BOOTSTRAP</a></li>
                    </ul>
                </div>
                <div id="rodape-coluna-3" class="col-md-3 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold">Braço de Ferro</h6>
                    <hr class="bg-danger mb-4 mt-0 d-inline-block mx-auto" style="width: 135px; height: 2px">
                    <ul class="list-unstyled">
                        <li class="my-2"><a class="conteudo-rodape" href="#">HTML</a></li>
                        <li class="my-2"><a class="conteudo-rodape" href="#">CSS</a></li>
                        <li class="my-2"><a class="conteudo-rodape" href="#">JAVASCRIPT</a></li>
                        <li class="my-2"><a class="conteudo-rodape" href="#">BOOTSTRAP</a></li>
                    </ul>
                </div>
            </div>
    </footer>
    
    <script src="Cadastro.js"></script>
</body>

</html>