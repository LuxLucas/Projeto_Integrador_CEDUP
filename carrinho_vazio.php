<?php
session_start();
include "php/comandos.php";
include "php/Buscar.php";
include "php/Selects.php";

$id = $_SESSION['id'];
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

    <title>BeauTIful - Bolsinha de produtos</title>
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
        <nav id="nav-inferior" class="nav nav-underline navbar navbar-expand-sm p-0">
            <div class="container d-none d-lg-flex">
            <div class="navbar-nav w-100 d-flex justify-content-between">
                    <a class="nav-link text-light" href="pesquisa.php?categorias=15&preco=on">PERFUMES</a>
                    <a class="nav-link text-light" href="pesquisa.php?categorias=16&preco=on">CORPO E BANHO</a>
                    <a class="nav-link text-light" href="pesquisa.php?categorias=17&preco=on">MAQUIAGEM</a>
                    <a class="nav-link text-light" href="pesquisa.php?categorias=18&preco=on">CABELO</a>
                    <a class="nav-link text-light" href="pesquisa.php?categorias=19&preco=on">INFANTIL</a>
                    <a class="nav-link text-light" href="pesquisa.php?categorias=20&preco=on">SKINCARE</a>
            </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="container pt-3 pb-5">
          <div class="mt-5 mb-5">
            <h1 class="title">Sem produtos na bolsinha.</h1>
            <p class="title fs-4">É... acho que é hora de ir <a href="index.php" class="text-primary text-decoration-underline"><strong>às compras</strong></a> &#x1F60E;</p>
          </div>
          <div class="mt-5 mb-3 d-flex justify-content-center">
            <h2 class="title fs-3">Que tal começar por</h2>
          </div>
                <div class="row row-cols-lg-4 row-cols-md-3 g-3">
            <?php recem_adicionados()?>
                </div>
            </div>
            
    </main>
    <footer>
        <div class="container">
            <div class="row g-3 pb-1 pt-3">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="w-100 d-flex justify-content-md-start justify-content-center">
                        <div class="d-inline-block text-center text-md-start">
                            <p class="text-white">&copy; 2023 - Beautiful Ltda</p>
                            <p class="text-white">Av. Gílio Búrigo, 2144, Criciúma/SC</p>
                            <p class="text-white">CNPJ: 99.999.999/0001-99</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="w-100 d-flex justify-content-md-end justify-content-center justify-content-lg-center">
                        <div class="d-inline-block text-center text-md-end text-lg-center">
                            <p class="text-white"><a href="#">Política de Privacidade</a></p>
                            <p class="text-white"><a href="#">Termos de Uso</a></p>
                            <p class="text-white"><a href="#">Quem Somos ?</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="w-100 d-flex justify-content-center justify-content-lg-end">
                        <div class="d-inline-block text-lg-end text-center">
                            <p class="text-white"><strong>Nosso Contato</strong></p>
                            <p class="text-white">beautiful.cosmeticos@gmail.com</p>
                            <p class="text-white">+55 (48) 99962-7044</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<!-- MODAL ERRO -->
    <div class="modal" id="erro" data-erro=<?php VerificarErro()?> tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Erro</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p id="texto_erro"></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
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
    <script src="js/valores.js"></script>
    <script src="js/jquery.mask.js"></script>
  </body>
</html>