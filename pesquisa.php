<?php
session_start();
include "php/comandos.php";
include "php/Buscar.php";
if(isset($_GET['pesquisa']))
{
$pesquisar = $_GET['pesquisa'];
$_SESSION['ultima_pesquisa'] = $pesquisar;
}else
{
    $pesquisar = $_SESSION['ultima_pesquisa'];
}
?>
<!Doctype html>
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
        <nav class="navbar navbar-expand-sm navbar-light bg-light py-3 mb-4 shadow-sm" id="nav-superior">
            <div class="container d-flex justify-content-between">
                <div><a href="index.php" class="navbar-brand">BeauTIful</a></div>

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
        <!-- Campo de pesquisa e filtro de produtos -->
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-5">
                    <form action="pesquisa.php" method="get" class="d-flex justify-content-center justify-content-md-start mb-md-0 mb-3">
                        <div class="input-group input-group-sm">
                            <input type="search" name="pesquisa" id="pesquisa" class="form-control" placeholder="Busque algo...">
                            <button type="submit" class="btn btn-primary">
                                Pesquisar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <hr class="mt-3">
            <div class="row">
               <?php pesquisando($pesquisar)?>
                    <form action="php/filtro1.php" method="POST"  class="ms-3 d-inline-block">
                        <select class="form-select form-select-sm" name="filtro" id="filtro">
                            <?php opcoesFiltro()?>
                        </select>
                        <button type="submit" class="btn btn-primary">
                                Filtrar
                            </button>
                    </form>
                </div>
                </div>
            </div>
        </div>
        <!-- Fim -->
                

    <!-- JavaScript -->
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
  </body>
</html>