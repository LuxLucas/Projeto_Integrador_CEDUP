<?php
session_start();
include "php/comandos.php";
include "php/Buscar.php";
include "php/Selects.php";
checarAdm();
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

    <title>BeauTIful - Relatório</title>
  </head>
  <body>
  <header>
        <div class="container">
            <nav class="navbar navbar-expand-sm pb-3 pt-4" id="nav-superior">
                        <div class="w-100">
                            <div class="row justify-content-between">
                                <div class="col-6 col-md-3 col-lg-2 mb-1 mb-md-0 mb-3">
                                    <div class="divLogo d-flex align-items-center">
                                        <img src="imagens/logo/Logo.png" alt="Logo" class="img-fluid">
                                        <a href="index" class="navbar-brand">Beautiful</a>
                                    </div>
                                </div>
                                    <!-- PESQUISA-->
                                    <div class="col-12 col-md-7 col-lg-5 order-1 order-md-0 d-flex align-items-center">
                                        <form action="pesquisa" method="get" class="d-flex w-100" role="search">
                                            <div class="input-group">
                                                <input class="form-control be-0" type="search" name='pesquisa' placeholder="Procure algo" aria-label="Search">
                                                <button class="btn btn-primary" type="submit"><i class="bi bi-search"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- FIM. BOTÃO TOGGLE-->
                                <div class="col-6 col-md-2 col-lg-5 mb-3 mb-md-0 d-flex align-items-center justify-content-end">
                                    <div class="d-flex justify-content-end">
                                        <button type="button" class="btn d-lg-none" data-bs-toggle="offcanvas" data-bs-target="#menuOffCanvas" aria-controls="offcanvasResponsive">
                                            <span class="navbar-toggler-icon"></span>
                                        </button>
                                    </div>
                                    <!-- FIM. LINKS-->
                                    <div class="d-none d-lg-flex navbar-nav justify-content-end">
                                        <div class="d-flex"><?php NavLogado();?></div>
                                    </div>
                                </div>
                            </div>
        <!-- FIM.-->
            </nav>      
        </div>
        <hr class="m-0 text-primary">
    </header>

    <main class="py-2">
        <div class="container">
            <div class="mt-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index" class="text-primary">Home</a></li>
                        <li class="breadcrumb-item"><a href="administrar" class="text-primary">Administração</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Relatórios</li>
                    </ol>
                </nav>
            </div>
            <div class="my-5">
                <h1 class="title text-center">Relatórios</h1>
            </div>
            
            <div class="row">
                <div class="col-sm-12 col-lg-6">
                    <div class="border bg-white rounded-3 p-2 mb-3">
                        <div class="my-2 d-flex justify-content-between px-1">
                            <h3>Ranking: Venda Mensal</h3>
                            <a href="#" class="fs-5 text-primary" data-bs-toggle="collapse" data-bs-target="#tabelaUm">#Por Venda</a>
                        </div>
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
                </div>
                <div class="col-sm-12 col-lg-6">
                    <div class="border bg-white rounded-3 p-2 mb-3">
                        <div class="my-2 d-flex justify-content-between px-1">
                            <h3>Ranking: Lucro Mensal</h3>
                            <a href="#a" data-bs-toggle="collapse" data-bs-target="#tabelaDois" class="fs-5 text-primary">#Por Lucro</a>
                        </div>
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
            </div>
            
            <div class="border rounded-3 bg-white p-2 ">
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
            
        </div>
    </main>
    <footer>
    </footer>
    <!-- FIM. OFFCANVAS -->
    <div class="offcanvas-lg offcanvas bg-fundo offcanvas-start d-lg-none" tabindex="-1" aria-labelledby="#offcanvasResponsiveLabel" id="menuOffCanvas">
            <!-- OFFCANVAS CABEÇALHO-->
            <div class="offcanvas-header bg-white">
                <h2 class="offcanvas-title fs-3" id="offcanvasResponsivelLabel">Menu</h2>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#menuOffCanvas" aria-label="Close"></button>
            </div>
            <hr class="m-0 text-primary">
            <!-- OFFCANVAS CORPO-->
            <div class="offcanvas-body">
            <div class="coluna">
                <?php NavLogado(); ?>
            </div>
        </div>
    <!-- JavaScript -->
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <script src="js/valores.js"></script>
    <script src="js/dataTable.js"></script>
    <script src="js/jquery.mask.js"></script>
  </body>
</html>