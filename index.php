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
        <div class="container">
            <div class="mt-5">
                <div class="row row-cols-5 g-3 justify-content-center">
                    <div class="col-auto mb-3">
                        <div class="card">
                            <img class="card-img-top" src="https://static.natura.com/cdn/ff/mUaHNvfKRSSji30SQEPqugZzV3T8daNuJ1jAuXpbzgE/1697527384/public/products/114584_1_8.jpg" alt="Imagem Produto">
                            <div class="card-body">
                                <p class="card-text">ESSENCIAL</p>
                                <p class="card-title">Essencial Ato Deo Parfum Masculino</p>
                                <p class="card-text texto-preco">R$ 240,00</p>
                                <button type="button" class="btn btn-primary w-100">Adquira Já</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto mb-3">
                        <div class="card">
                            <img class="card-img-top" src="https://res.cloudinary.com/beleza-na-web/image/upload/w_1500,f_auto,fl_progressive,q_auto:eco,w_210,h_210/v1/imagens/product/B52012/f7826bd0-d67a-4b85-87f7-f0cbdf730f89-bot-52012-nativa-spa-ameixa-dourada-body-splash-frontal-01.jpg" alt="Imagem Produto">
                            <div class="card-body">
                                <p class="card-text">ESSENCIAL</p>
                                <h5 class="card-title">Essencial Ato Deo Parfum Masculino</h5>
                                <p class="card-text">R$ 240,00</p>
                                <button type="button" class="btn btn-primary w-100">Adquira Já</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto mb-3">
                        <div class="card">
                            <img class="card-img-top" src="https://static.natura.com/cdn/ff/mUaHNvfKRSSji30SQEPqugZzV3T8daNuJ1jAuXpbzgE/1697527384/public/products/114584_1_8.jpg" alt="Imagem Produto">
                            <div class="card-body">
                                <p class="card-text">ESSENCIAL</p>
                                <h5 class="card-title">Essencial Ato Deo Parfum Masculino</h5>
                                <p class="card-text">R$ 240,00</p>
                                <button type="button" class="btn btn-primary w-100">Adquira Já</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto mb-3">
                        <div class="card">
                            <img class="card-img-top" src="https://res.cloudinary.com/beleza-na-web/image/upload/w_1500,f_auto,fl_progressive,q_auto:eco,w_210,h_210/v1/imagens/product/B52012/f7826bd0-d67a-4b85-87f7-f0cbdf730f89-bot-52012-nativa-spa-ameixa-dourada-body-splash-frontal-01.jpg" alt="Imagem Produto">
                            <div class="card-body">
                                <p class="card-text">ESSENCIAL</p>
                                <h5 class="card-title">Essencial Ato Deo Parfum Masculino</h5>
                                <p class="card-text">R$ 240,00</p>
                                <button type="button" class="btn btn-primary w-100">Adquira Já</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto mb-3">
                        <div class="card">
                            <img class="card-img-top" src="https://static.natura.com/cdn/ff/mUaHNvfKRSSji30SQEPqugZzV3T8daNuJ1jAuXpbzgE/1697527384/public/products/114584_1_8.jpg" alt="Imagem Produto">
                            <div class="card-body">
                                <p class="card-text">ESSENCIAL</p>
                                <h5 class="card-title">Essencial Ato Deo Parfum Masculino</h5>
                                <p class="card-text">R$ 240,00</p>
                                <button type="button" class="btn btn-primary w-100">Adquira Já</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto mb-3">
                        <div class="card">
                            <img class="card-img-top" src="https://res.cloudinary.com/beleza-na-web/image/upload/w_1500,f_auto,fl_progressive,q_auto:eco,w_210,h_210/v1/imagens/product/B52012/f7826bd0-d67a-4b85-87f7-f0cbdf730f89-bot-52012-nativa-spa-ameixa-dourada-body-splash-frontal-01.jpg" alt="Imagem Produto">
                            <div class="card-body">
                                <p class="card-text">ESSENCIAL</p>
                                <h5 class="card-title">Essencial Ato Deo Parfum Masculino</h5>
                                <p class="card-text">R$ 240,00</p>
                                <button type="button" class="btn btn-primary w-100">Adquira Já</button>
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
  </body>
</html>