<?php
session_start();
include "php/comandos.php";
?>
<!doctype html>
<html lang="pt-br">
  <head>
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
        <nav class="navbar stiky-top navbar-expand-sm navbar-light bg-light" id="nav-superior">
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
        <!--CONTAINER DO CONTEÚDO-->
        <div class="container-fluid px-sm-1 px-md-2 px-lg-5 mt-5">

        <!--CONTAINER DOS CAMPOS DE ENDEREÇO-->
            <div class="endereco">

        <!--CONTAINER ENDEREÇO CABEÇALHO-->
                <div class="endereco-head d-flex justify-content-between">
                    <h1 class="title fs-4 m-0">Administrar Endereço</h1>
                    <div class="button-group d-flex">
                    <button type="button" class="btnUpdate btn btn-danger d-lg-flex me-1" id="btnDelete"><i class="bi bi-dash-square-fill"></i>Deletar</button>
                    <button type="button" class="btnUpdate btn btn-success d-lg-flex" id="btnCadastro"><i class="bi bi-plus-square-fill"></i></i>Cadastrar</button>
                        <button type="button" class="dropdown-toggle nav-link drop-menu d-lg-none" data-bs-toggle="dropdown" aria-expanded="false">
                        </button>
                        <ul class="dropdown-menu dropdown-menu-sm-end d-lg-none py-0">
                            <li><button type="button" class="btn btn-danger w-100"><i class="bi bi-dash-square-fill"></i>Deletar</button></li>
                            <li><button type="button" class="btn btn-success w-100"><i class="bi bi-plus-square-fill"></i></i>Cadastrar</button></li>
                        </ul>
                    </div>
                </div>

        <!--CONTAINER ENDEREÇO CORPO-->
                <div class="endereco-body p-1 table-responsive mb-3">
                    
        <!--TABELA-->
                    <table class="table table-hover table-striped ">
                        <thead>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="checkTudo" id="checkTudo">
                                    </div>
                                </td>
                                <td>ID</td>
                                <td>USUÁRIO</td>
                                <td>CEP</td>
                                <td>ESTADO</td>
                                <td>MUNICÍPIO</td>
                                <td>BAIRRO</td>
                                <td>LOGRADOURO</td>
                                <td>COMPLEMENTO</td>
                                <td>AÇÕES</td>
                            </tr>
                        </thead>
                        <tbody class="">
                            <tr class="text-truncate">
                                <td class="align-items-center d-flex">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="checkTudo">
                                    </div>
                                </td>
                                <td class="align-middle">1</td>
                                <td class="align-middle">1</td>
                                <td class="align-middle">88815-318</td>
                                <td class="align-middle">SC</td>
                                <td class="align-middle">CRICIÚMA</td>
                                <td class="align-middle">ANA MARIA</td>
                                <td class="align-middle">AV. GÍLIO BÚRIGO</td>
                                <td class="align-middle">CASA COR DE PÊSEGO COM JANELAS MARRONS</td>
                                <td class="align-middle">
                                    <a href="#" class="btn p-0 pe-1 editarEndereco" role="button"><i class="bi bi-pen-fill"></i></a>
                                    <a href="#" class="btn p-0 pr-1 excluirEndereco" role="button"><i class="bi bi-trash3-fill"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        <!--NAVEGADOR DE LISTA-->
            <nav class="navbar d-flex justify-content-center " aria-label="navegue">
                <ul class="pagination align-items-center m-0">
                    <li class="page-item">
                        <a class="page-link" aria-current="page">Anterior</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">Próximo</a>
                    </li>
                </ul>
            </nav>
        </div>
    </main>
    <footer>
        
    </footer>
    <!-- JavaScript -->
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
  </body>
</html>