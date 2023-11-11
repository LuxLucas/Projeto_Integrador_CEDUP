<?php
session_start();
include "php/comandos.php";
include "php/Buscar.php";
$id = $_GET["id"];

$pesquisa = InformacoesProduto($id);

$dados = mysqli_fetch_array($pesquisa);

$nome_prod = $dados[0];
$preco_prod = $dados[1];
$nome_distri = $dados[2];
$nome_categ = $dados[3];
$imagem = $dados[4];
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>

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
        <div class="container">
            <div class="row alig-items-center">
                
                <!-- Imagem de produto -->
                <div class="col-sm-12 col-lg-6">
                    <hr>
                    <div class="d-flex justify-content-center align-items-center m-auto" style="max-width:450px;">
                        <div class="d-flex justify-content-center align-items-center ">
                            <img src=<?php echo"'view/imagem/$imagem'"?> class="img-fluid" alt="Imagem do produto">
                        </div>
                    </div>
                </div>
                <!-- Informações de produto -->
                <div class="col-sm-12 col-lg-6">
                    <hr>
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex justify-content-end mb-2 mb-md-3  mb-lg-4 mt-lg-4">
                                <?php ProdFavorito2($id)?>
                            </div>
                        </div>
                        <div class="col-12">
                            <h2 class="fs-4 text-break text-truncate-3l titulo" id="nomeProd">
                               <?php echo $nome_prod;?>
                            </h2>
                        </div>
                        <div class="col-12 my-1 my-lg-2">
                            <div class="d-flex justify-content-between">
                                <p class="text-body-secondary text-truncate-1l"><?php echo $nome_categ;?></p>
                                <p class="text-body-secondary text-truncate-1l"><?php echo $nome_distri;?></p>
                            </div>
                        </div>
                        <div class="col-12 my-1 my-lg-2 mb-lg-4">
                            <div class="row">
                                <div class="col-md-5 col-6">
                                    <div class="d-flex">
                                        <p class="fs-2 my-auto text-primary" id='preco'>
                                            <strong><?php echo $preco_prod?></strong>
                                        </p>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 my-2 mt-lg-3">
                            <div class="row">
                                <div class="col-12 col-md-4 mb-3 mb-md-4">
                                    <div class="input-group d-flex align-items-center justify-content-center rounded-pill">
                                        <button type="button" onclick="diminuirProd()" class="btn border-end bg-grey-claro rounded-start-pill shadow-sm btn-light btn-plus">
                                            <i class="bi bi-dash-lg"></i>
                                        </button>

                                        <!-- <input type="number" id="qtdProduto" min="1" value="1" class="m-0 text-center form-control"> -->
                                        <p id="qtdProduto" class="text-center m-0 px-3 pt-1">1</p>

                                        <button type="button" onclick="adicionarProd()" class="btn border-start bg-grey-claro rounded-end-pill shadow-sm btn-light btn-plus">
                                            <i class="bi bi-plus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-12 col-md-8">
                                    <button type="button" onclick='adicionarCarrinho()' class=" btn btn-primary w-100">
                                        <a href="#" class="btn-buy">ADQUIRIR</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr> 
            </div> 
        </div>
        <div class="modal" id="aviso" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">aviso</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p id="texto_aviso"></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>

    <!-- JavaScript -->
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <script src="js/comandos.js"></script>
    <script src="js/jquery.mask.js"></script>
    <script src="js/valores.js"></script>
  </body>
</html>