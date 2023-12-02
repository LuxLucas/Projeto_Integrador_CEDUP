<?php
session_start();
include "php/comandos.php";
include "php/Buscar.php";
checarAdm();
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
                    <li class="breadcrumb-item active" aria-current="page">Administrar Produto</li>
                    </ol>
                </nav>
            </div>
            <div class="">
                <div class="row row-cols-sm-1 row-cols-md-2 row-cols-lg-3 g-4 mt-2">
                    <div class="col">
                        <div class="card cor-bg-dois m-auto text-center">
                            <a href="produto" class="link-adm">
                                <div class="card-body">
                                    <h5 class="card-title">Produto</h5>
                                    <p>Gerencie informações referentes a produtos aqui.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card cor-bg-cinco m-auto text-center">
                            <a href="distribuidor" class="link-adm">
                                <div class="card-body">
                                    <h5 class="card-title">Distribuidora</h5>
                                    <p>Gerencie informações referentes a distribuidoras aqui.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col">
                    <div class="card cor-bg-tres m-auto">
                        <a href="entregas" class="link-adm">
                            <div class="card-body text-center">
                                <h5 class="card-title">Entregas</h5>
                                <p>Adquira informações referentes a entregas aqui.</p>
                            </div>
                        </a>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        
    </footer>
    <!-- FIM. OFFCANVAS-->
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
    </div>
    <!-- JavaScript -->
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
  </body>
</html>