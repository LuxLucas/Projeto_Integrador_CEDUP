<?php
session_start();
include "php/comandos.php";
$_SESSION["tipo"] = 1;
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">

        <link rel="stylesheet" href="view/css/estilo.css">
        <link rel="stylesheet" href="view/css/main.css">
        <title>BeauTIful - Nome provisório</title> 
    </head>
    <body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-light bg-light py-3" id="nav-superior">
            <div class="container">
                <a href="index.php" class="navbar-brand">BeauTIful</a>
                <button type="button" class="btn d-lg-none" data-bs-toggle="offcanvas" data-bs-target="#menuOffCanvas" aria-controls="offcanvasResponsive">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas-lg offcanvas-start container-fluid" tabindex="-1" aria-labelledby="#offcanvasResponsiveLabel" id="menuOffCanvas">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasResponsivelLabel">Menu</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#menuOffCanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body justify-content-between">
                        <form class="d-flex" role="search">
                        <div class="input-group">
                                <input class="form-control be-0" type="search" placeholder="Procure algo" aria-label="Search">
                                <button class="btn btn-primary" type="submit"><i class="bi bi-search"></i></button>
                            </div>
                        </form>
                        <?php
                        NavLogado();
                        ?>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container mt-5">
            <div class="d-flex justify-content-center">
                <form action="php/cadastrarUsuario.php" method="POST" class="w-100">
                    <div class="row g-3 justify-content-center" id="etapaUm">
                        <div class="col-sm-10 col-md-8 col-lg-6">
                            <div class=" d-flex justify-content-between align-items-center">
                                <h1 class="titulo">
                                    Cadastro
                                </h1>
                                <p class="text-capitalize textoEtapa">
                                    Etapa 1 de 3
                                </p>
                            </div>
                        </div>
                        <div class="w-100 d-none d-lg-block"></div>
                        <div class="col-sm-10 col-md-8 col-lg-6">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome">
                        </div>
                        <div class="w-100 d-none d-lg-block"></div>
                        <div class="col-sm-10 col-md-8 col-lg-6">
                            <label for="cpf" class="form-label">CPF</label>
                            <input type="text" class="form-control" name="cpf" id="cpf" placeholder="CPF">
                        </div>
                        <div class="w-100 d-none d-lg-block"></div>
                        <div class="col-sm-10 col-md-8 col-lg-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                        </div>
                        <div class="w-100 d-none d-lg-block"></div>
                        <div class="col-sm-10 col-md-8 col-lg-6 mt-4">
                            <button type="button" class="btn btn-primary btn-destaque w-100" id="proximo1">Próximo</button>
                        </div>
                    </div>
                    <div class="row g-3 justify-content-center d-none" id="etapaDois">
                        <div class="col-sm-10 col-md-8 col-lg-6">
                            <div class=" d-flex justify-content-between align-items-center">
                                <h1 class="titulo">
                                    Cadastro
                                </h1>
                                <p class="text-capitalize textoEtapa">
                                    Etapa 2 de 3
                                </p>
                            </div>
                        </div>  
                        <div class="w-100 d-none d-lg-block"></div>
                        <div class="col-sm-10 col md-8 col-lg-6">
                            <label for="dataNasc" class="form-label">Data de Nascimento</label>
                            <input type="date" name="nascimento" id="dataNasc" class="form-control" placeholder="Data de Nascimento">
                        </div>
                        <div class="w-100 d-none d-lg-block"></div>
                        <div class="col-sm-10 col-md-8 col-lg-6">
                            <label for="telefone" class="form-label">Telefone</label>
                            <input type="text" name="telefone" id="telefone" class="form-control" placeholder="Número de Telefone">
                        </div>
                        <div class="w-100 d-none d-lg-block"></div>
                        <div class="col-sm-10 col-md-8 col-lg-6">
                            <label for="telefone" class="form-label">Gênero</label>
                            <select name="sexo" id="sexo" class="form-select">
                                <option value="S" selected>Gênero</option>
                                <option value="F">Feminino</option>
                                <option value="M">Masculino</option>
                                <option value="O">Outro</option>
                            </select> 
                        </div>
                        <div class="w-100 d-none d-lg-block"></div>
                        <div class="col-sm-10 col-md-8 col-lg-6 mt-4">
                            <button type="button" class="btn btn-primary btn-destaque w-100" id="proximo2">Próximo</button>
                        </div>
                    </div>
                    <div class="row g-3 justify-content-center d-none" id="etapaTres">
                        <div class="col-sm-10 col-md-8 col-lg-6">
                            <div class=" d-flex justify-content-between align-items-center">
                                <h1 class="titulo">
                                    Cadastro
                                </h1>
                                <p class="text-capitalize textoEtapa">
                                    Etapa 3 de 3
                                </p>
                            </div>
                        </div>
                        <div class="w-100 d-none d-lg-block"></div>
                        <div class="col-sm-10 col-md-8 col-lg-6">
                            <label for="senha" class="form-label">Senha</label>
                            <input type="password" name="senha" id="senha" class="form-control" placeholder="Senha">
                        </div> 
                        <div class="w-100 d-none d-lg-block"></div>  
                        <div class="col-sm-10 col-md-8 col-lg-6">
                            <label for="confSenha" class="form-label">Confirme Senha</label>
                            <input type="password" name="confSenha" id="confSenha" class="form-control" placeholder="Confirme Senha">
                        </div>
                        <div class="w-100 d-none d-lg-block"></div>
                        <div class="col-sm-10 col-md-8 col-lg-6 mt-4">
                            <button type="submit" class="btn btn-primary btn-destaque w-100" id="btn_cadastrar">Cadastrar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <footer>

    </footer>
        <!-- JavaScript -->
        <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
        <script src="js/comandos.js"></script>
    </body>
</html>