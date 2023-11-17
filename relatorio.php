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
            <div class="container d-flex justify-content-between">
                <a href="index.php" class="navbar-brand">BeauTIful</a>
                <div>
                  <button type="button" class="btn d-lg-none" data-bs-toggle="offcanvas" data-bs-target="#menuOffCanvas" aria-controls="offcanvasResponsive">
                      <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="offcanvas-lg offcanvas-start container-fluid" tabindex="-1" aria-labelledby="#offcanvasResponsiveLabel" id="menuOffCanvas">
                      <div class="offcanvas-header">
                          <h5 class="offcanvas-title" id="offcanvasResponsivelLabel">Menu</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#menuOffCanvas" aria-label="Close"></button>
                      </div>
                      <div class="offcanvas-body justify-content-between">
                          <?php
                          NavLogado();
                          ?>
                      </div>
                  </div>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="container">
            <div class="mt-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php" class="text-primary">Home</a></li>
                        <li class="breadcrumb-item"><a href="administrar.php" class="text-primary">Administração</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Relatórios</li>
                    </ol>
                </nav>
            </div>
            <div class="my-4">
                <h2>Relatórios</h2>
            </div>
            <hr>
            
            <div class="row">
                <div class="col-sm-12 col-lg-6">
                    <div class="my-2 d-flex justify-content-between">
                        <h3>Ranking: Venda Mensal</h3>
                        <a href="#" class="fs-5 text-primary" data-bs-toggle="collapse" data-bs-target="#tabelaUm">#Por Venda</a>
                    </div>
                    <hr>
                    <div class="table-responsive">
                        <table class="table table-sm table-hover table-striped ">
                            <thead>
                                <th>#</th>
                                <th>NOME</th>
                                <th>PREÇO</th>
                                <th>VENDAS</th>
                            </thead>
                            <tbody> 
                             <?php RelRanQuantidade()?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6">
                <div class="my-2 d-flex justify-content-between">
                        <h3>Ranking: Lucro Mensal</h3>
                        <a href="#a" data-bs-toggle="collapse" data-bs-target="#tabelaDois" class="fs-5 text-primary">#Por Lucro</a>
                    </div>
                    <hr>
                    <div class="table-responsive">
                        <table class="table table-sm table-hover table-striped ">
                            <thead>
                                <th>#</th>
                                <th>NOME</th>
                                <th>PREÇO</th>
                                <th>LUCRO(R$)</th>
                            </thead>
                            <tbody> 
                            <?php RelRanLucro()?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="accordion accordion-flush" id="acordeaoTabelas">
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="fs-5 accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#tabelaUm" aria-expanded="false" aria-controls="tabelaUm">
                    Por Venda
                </button>
                </h2>
                <div id="tabelaUm" class="accordion-collapse collapse" data-bs-parent="#acordeaoTabelas">
                    <div class="accordion-body">
                        <div class="row table-responsive mb-3">
                            <div class="col-12">
                            <table class="table table-striped px-0 mb-3" id="relatorioVend">
                                <thead>
                                    <th>ID</th>
                                    <th>IMAGEM</th>
                                    <th>CATEGORIA</th>
                                    <th>NOME</th>
                                    <th>R$</th>
                                    <th>VENDA(S)</th>
                                    <th>ESTOQUE</th>
                                    <th></th>
                                </thead>
                                <tbody>
                                  <?php RelQuantidade()?>

                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="fs-5 accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#tabelaDois" aria-expanded="false" aria-controls="tabelaDois">
                    Por Lucro
                </button>
                </h2>
                <div id="tabelaDois" class="accordion-collapse collapse" data-bs-parent="#acordeaoTabelas">
                    <div class="accordion-body">
                        <div class="row table-responsive mb-3">
                            <div class="col-12">
                            <table class="table table-striped px-0 mb-3" id="relatorioQtd">
                                <thead>
                                    <th>ID</th>
                                    <th>IMAGEM</th>
                                    <th>CATEGORIA</th>
                                    <th>NOME</th>
                                    <th>R$</th>
                                    <th>LUCRO(R$)</th>
                                    <th>ESTOQUE</th>
                                    <th></th>
                                </thead>
                                <tbody>
                                <?php RelLucro()?>

                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            
        </div>
    </main>
    <footer>
        
    </footer>

    <!-- JavaScript -->
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <script src="js/valores.js"></script>
    <script src="js/dataTable.js"></script>
    <script src="js/jquery.mask.js"></script>
  </body>
</html>