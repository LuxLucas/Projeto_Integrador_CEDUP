<?php
session_start();
include "php/comandos.php";
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
  <header>
        <nav class="navbar navbar-expand-sm navbar-light bg-light py-3" id="nav-superior">
            <div class="container">
                <a href="#" class="navbar-brand">BeauTIful</a>
                <button type="button" class="btn d-lg-none" data-bs-toggle="offcanvas" data-bs-target="#menuOffCanvas" aria-controls="offcanvasResponsive">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas-lg offcanvas-start container-fluid" tabindex="-1" aria-labelledby="#offcanvasResponsiveLabel" id="menuOffCanvas">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasResponsivelLabel">Menú</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#menuOffCanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body justify-content-between">
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Procure algo" aria-label="Search">
                            <button class="btn btn-primary" type="submit">Buscar</button>
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

    </main>
    <footer>

    </footer>

    <!-- JavaScript -->
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
  </body>
</html>