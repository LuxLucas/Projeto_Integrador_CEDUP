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
                                    <div class="d-flex align-items-center"><a href="index.php" class="navbar-brand">BeauTIful</a></div>
                                </div>
                                    <!-- PESQUISA-->
                                    <div class="col-12 col-md-7 col-lg-5 order-1 order-md-0">
                                        <form action="pesquisa.php" method="get" class="d-flex" role="search">
                                            <div class="input-group">
                                                <input class="form-control be-0" type="search" placeholder="Procure algo" aria-label="Search">
                                                <button class="btn btn-primary" type="submit"><i class="bi bi-search"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- FIM. BOTÃO TOGGLE-->
                                <div class="col-6 col-md-2 col-lg-5 mb-3 mb-md-0">
                                    <div class="d-flex justify-content-end">
                                        <button type="button" class="btn d-lg-none" data-bs-toggle="offcanvas" data-bs-target="#menuOffCanvas" aria-controls="offcanvasResponsive">
                                            <span class="navbar-toggler-icon"></span>
                                        </button>
                                    </div>
                                    <!-- FIM. LINKS-->
                                    <div class="d-none d-lg-flex navbar-nav justify-content-end"><?php NavLogado(); ?>
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
                    <a class="nav-link text-light" href="#">PERFUMES</a>
                    <a class="nav-link text-light" href="#">CORPO E BANHO</a>
                    <a class="nav-link text-light" href="#">MAQUIAGEM</a>
                    <a class="nav-link text-light" href="#">CABELO</a>
                    <a class="nav-link text-light" href="#">INFANTIL</a>
                    <a class="nav-link text-light" href="#">SKINCARE</a>
            </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="container pt-3 pb-5">
          
          <div class="row mt-5">
            <div class="col-lg-9 col-sm-12 table-responsive mb-4 mb-lg-0">
              <table class="table table-striped px-0">
                <thead>
                  <th>PRODUTO</th>
                  <TH>PREÇO</TH>
                  <th>QUANTIDADE</th>
                  <th>TOTAL</th>
                  <th></th>
                </thead>
                <tbody>
                 <?php BuscarCarrinho($id)?>
                <div class="mt-5">
                <h2 class="title text-center mb-4">Talvez goste de</h2>
                <div class="row row-cols-lg-4 row-cols-md-3 g-3">
                    <!-- CARTÃO PRODUTO -->
                    <div class='col-lg-3 col-md-4 col-sm-6 d-flex justify-content-center mb-sm-3 align-items-strech'>
                            <div class='card text-center'>
                            <button type='button' onclick='favoritar(this)' id='btnFavorito' class='btn corazonInativo shadow-sm position-absolute right-0 p-2' data-status=0 data-iden=$id >
                            <p id='pCorazon' class='m-0'>Favoritar <i class='bi bi-bookmark-heart-fill'></i></p>
                            </button>
                            <span class="position-absolute end-0 py-2 px-3">4.7 <i class="bi bi-star-fill text-warning"></i></span>

                            <a href='#' class="text-black">
                                    
                                <img src="https://picsum.photos/seed/picsum/254" alt='Produto' class='card-img-top'>
                                
                                <div id='preco' class='card-header'>
                                    <strong class="fs-5">R$ 45,90</strong>
                                </div>
                                <div class='card-body'>
                                    <p class='fs-5 card-title text-truncate-2l'>Egeo Spicy Vibe Desodorante Colônia 90ml</p>
                                    <p class='card-text text-truncate-2l'>Descrição Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia repellendus consectetur, nemo ullam sunt, placeat, quos temporibus nisi dolore minima debitis adipisci ipsam quidem ipsum sequi. Numquam exercitationem eveniet accusamus reprehenderit amet illo laudantium voluptatum officia, totam libero modi tempore cupiditate vel illum soluta repudiandae! Commodi a iure provident pariatur?</p>
                                </div>
                            </a>
                                <div class='card-footer'>
                                    <button type='button' class='btn btn-primary'>
                                        <strong>Adicionar na bolsa</strong>
                                    </button>
                                </div>
                            </div>
                    </div>
                    <!-- FIM. CARTÃO PRODUTO -->
                    <div class='col-lg-3 col-md-4 col-sm-6 d-flex justify-content-center mb-sm-3 align-items-strech'>
                            <div class='card text-center'>
                            <button type='button' onclick='favoritar(this)' id='btnFavorito' class='btn corazonInativo shadow-sm position-absolute right-0 p-2' data-status=0 data-iden=$id >
                            <p id='pCorazon' class='m-0'>Favoritar <i class='bi bi-bookmark-heart-fill'></i></p>
                            </button>
                            <span class="position-absolute end-0 py-2 px-3">4.7 <i class="bi bi-star-fill text-warning"></i></span>

                            <a href='#' class="text-black">
                                    
                                <img src="https://picsum.photos/seed/picsum/254" alt='Produto' class='card-img-top'>
                                
                                <div id='preco' class='card-header'>
                                    <strong class="fs-5">R$ 45,90</strong>
                                </div>
                                <div class='card-body'>
                                    <p class='fs-5 card-title text-truncate-2l'>Egeo Spicy Vibe Desodorante Colônia 90ml</p>
                                    <p class='card-text text-truncate-2l'>Descrição Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia repellendus consectetur, nemo ullam sunt, placeat, quos temporibus nisi dolore minima debitis adipisci ipsam quidem ipsum sequi. Numquam exercitationem eveniet accusamus reprehenderit amet illo laudantium voluptatum officia, totam libero modi tempore cupiditate vel illum soluta repudiandae! Commodi a iure provident pariatur?</p>
                                </div>
                            </a>
                                <div class='card-footer'>
                                    <button type='button' class='btn btn-primary'>
                                        <strong>Adicionar na bolsa</strong>
                                    </button>
                                </div>
                            </div>
                    </div>
                    <!-- FIM. CARTÃO PRODUTO -->
                    <div class='col-lg-3 col-md-4 col-sm-6 d-flex justify-content-center mb-sm-3 align-items-strech'>
                            <div class='card text-center'>
                            <button type='button' onclick='favoritar(this)' id='btnFavorito' class='btn corazonInativo shadow-sm position-absolute right-0 p-2' data-status=0 data-iden=$id >
                            <p id='pCorazon' class='m-0'>Favoritar <i class='bi bi-bookmark-heart-fill'></i></p>
                            </button>
                            <span class="position-absolute end-0 py-2 px-3">4.7 <i class="bi bi-star-fill text-warning"></i></span>

                            <a href='#' class="text-black">
                                    
                                <img src="https://picsum.photos/seed/picsum/254" alt='Produto' class='card-img-top'>
                                
                                <div id='preco' class='card-header'>
                                    <strong class="fs-5">R$ 45,90</strong>
                                </div>
                                <div class='card-body'>
                                    <p class='fs-5 card-title text-truncate-2l'>Egeo Spicy Vibe Desodorante Colônia 90ml</p>
                                    <p class='card-text text-truncate-2l'>Descrição Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia repellendus consectetur, nemo ullam sunt, placeat, quos temporibus nisi dolore minima debitis adipisci ipsam quidem ipsum sequi. Numquam exercitationem eveniet accusamus reprehenderit amet illo laudantium voluptatum officia, totam libero modi tempore cupiditate vel illum soluta repudiandae! Commodi a iure provident pariatur?</p>
                                </div>
                            </a>
                                <div class='card-footer'>
                                    <button type='button' class='btn btn-primary'>
                                        <strong>Adicionar na bolsa</strong>
                                    </button>
                                </div>
                            </div>
                    </div>
                    <!-- FIM. CARTÃO PRODUTO -->
                    <div class='col-lg-3 col-md-4 col-sm-6 d-flex justify-content-center mb-sm-3 align-items-strech'>
                            <div class='card text-center'>
                            <button type='button' onclick='favoritar(this)' id='btnFavorito' class='btn corazonInativo shadow-sm position-absolute right-0 p-2' data-status=0 data-iden=$id >
                            <p id='pCorazon' class='m-0'>Favoritar <i class='bi bi-bookmark-heart-fill'></i></p>
                            </button>
                            <span class="position-absolute end-0 py-2 px-3">4.7 <i class="bi bi-star-fill text-warning"></i></span>

                            <a href='#' class="text-black">
                                    
                                <img src="https://picsum.photos/seed/picsum/254" alt='Produto' class='card-img-top'>
                                
                                <div id='preco' class='card-header'>
                                    <strong class="fs-5">R$ 45,90</strong>
                                </div>
                                <div class='card-body'>
                                    <p class='fs-5 card-title text-truncate-2l'>Egeo Spicy Vibe Desodorante Colônia 90ml</p>
                                    <p class='card-text text-truncate-2l'>Descrição Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia repellendus consectetur, nemo ullam sunt, placeat, quos temporibus nisi dolore minima debitis adipisci ipsam quidem ipsum sequi. Numquam exercitationem eveniet accusamus reprehenderit amet illo laudantium voluptatum officia, totam libero modi tempore cupiditate vel illum soluta repudiandae! Commodi a iure provident pariatur?</p>
                                </div>
                            </a>
                                <div class='card-footer'>
                                    <button type='button' class='btn btn-primary'>
                                        <strong>Adicionar na bolsa</strong>
                                    </button>
                                </div>
                            </div>
                    </div>
                    <!-- FIM. CARTÃO PRODUTO -->
                </div>
            </div>
            </div>
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
    <script>
      let carrinho  = new DataTable('#carrinho');
    </script>
 <script src="js/jquery.mask.js"></script>
  </body>
</html>