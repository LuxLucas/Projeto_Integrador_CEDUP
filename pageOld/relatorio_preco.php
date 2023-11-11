<?php
session_start();
include "php/comandos.php";
include "php/Buscar.php";
include "php/Selects.php";
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

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
                        <form class="d-flex" role="search" action="pesquisa.php" method="get">
                            <div class="input-group">
                                <input class="form-control be-0" name="pesquisa" type="search" placeholder="Procure algo" aria-label="Search">
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

        <!-- CONTAINER DOS CAMPOS DE ENDEREÇO -->
            <div class="endereco">

        <!-- CONTAINER ENDEREÇO CABEÇA -->
                <div class="endereco-head d-flex justify-content-between mb-2">
                  <h1 class="title fs-4 m-0">
                    Relatório De Produtos
                  </h1>
                  <button type="button" class="btn btn-success d-flex me-1" id="btnCadastro"><a href="relatorio_quant.php">Por Quantidade</a></button>
                </div>

        <!-- CONTAINER ENDEREÇO CORPO -->
                <div class="endereco-body p-1 table-responsive mb-3">
                    
        <!-- TABELA -->
                <table id='relatorio' class="table table-bordered table-striped nowrap">
                  <thead>
                    <tr>
                        <th>ID</th>
                        <th>IMAGEM</th>
                        <th>NOME</th>
                        <th>R$</th>
                        <th>GERADO (R$)</th>
                        <th>ABRIR</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="align-middle text-center">
                        <td>1</td>
                        <td>
                          <div class="img-list m-auto">
                            <img class="img-fluid" src="view/imagem/Hidratante.png" alt="Imagem Produto">                 </div>
                        </td>
                        <td>Creme Protetor para as Mãos Luvas de Silicone Avon Care</td>
                        <td>7,40</td>
                        <td>178</td>
                        <td><button type="button" class="btn btnIcon"><i class="bi  bi-file-earmark-text-fill "></i></button></td>
                    </tr>
                    <tr class="align-middle text-center">
                        <td>1</td>
                        <td>
                          <div class="img-list m-auto">
                            <img class="img-fluid" src="view/imagem/Hidratante.png" alt="Imagem Produto">                 </div>
                        </td>
                        <td>Creme Protetor para as Mãos Luvas de Silicone Avon Care</td>
                        <td>7,40</td>
                        <td>178</td>
                        <td><button type="button" class="btn btnIcon"><i class="bi bi-file-earmark-text-fill"></i></button></td>
                    </tr>
                  </tbody>
                </table>
              </div>
          </div>
        </div>
    </main>
    <footer>
        
    </footer>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <script src="js/valores.js"></script>
    <script src="js/dataTable.js"></script>
    <script src="js/jquery.mask.js"></script>
    </body>
</html>