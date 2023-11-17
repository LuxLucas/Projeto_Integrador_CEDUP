<?php
session_start();
include "php/comandos.php";
include "php/Buscar.php";
include "php/Selects.php";

//$id = $_GET['id'];
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
              <li class="breadcrumb-item"><a href="carrinho.php" class="text-primary">Bolsinha</a></li>
              <li class="breadcrumb-item active" aria-current="page">Endereço-Compra</li>
            </ol>
          </nav>
        </div>

          <div class="my-4">
              <h2>Formas de Pagamento</h1>
          </div>
          <hr>
        
        <div class="row">

          <div class="col mb-3">
            <div class="card mx-auto card-pag">
            <div class="card-img">
              <img src="imagens/PIX-nbg_h318.png" alt="Logo PIX" class="img-fluid">
            </div>
              <div class="card-header">
                <h3 class="text-center">PIX</h3>
              </div>
            </div>
          </div>

          <div class="col mb-3">
            <div class="card mx-auto card-pag">
            <div class="card-img">
              <img src="imagens/boleto-simbolo-nbg_h318.png" alt="Logo Boleto" class="img-fluid">
            </div>
              <div class="card-header ">
                <h3 class="text-center">Boleto</h3>
              </div>
            </div>
          </div>

          <div class="col mb-3">
            <div class="card mx-auto card-pag">
            <div class="card-img">
              <img src="imagens/visa-logo-nbg_h318.png" alt="Logo Visa" class="img-fluid">
            </div>
              <div class="card-header">
                <h3 class="text-center">Cartão</h3>
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
    <script src="js/jquery.mask.js"></script>
  </body>
</html>