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
  <header class="mb-3 mb-md-4 mb-lg-5">
        <nav class="navbar stiky-top navbar-expand-sm navbar-light bg-light py-3" id="nav-superior">
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
        <div class="container mt-5 d-flex align-items-center h-100">
            <div class="row row-cols-sm-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card cor-bg-um m-auto text-center">
                        <a href="pais.php" class="link-adm">
                            <div class="card-body">
                                <h5 class="card-title">País</h5>
                                <p>Gerencie informações referentes a países aqui.</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="card cor-bg-tres m-auto text-center">
                        <a href="estado.php" class="link-adm">
                            <div class="card-body">
                                <h5 class="card-title">Estado</h5>
                                <p>Gerencie informações referentes a estados aqui.</p>
                            </div>
                        </a>
                    </div>
                </div>   
            </div>
        </div>
    </main>
    <footer>
        
    </footer>
    <!-- JavaScript -->
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
  </body>
</html>