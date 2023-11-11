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

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">

    <link rel="stylesheet" href="view/css/estilo.css">
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <link rel="stylesheet" href="view/css/main.css">

    <title>BeauTIful - Nome provisório</title>
  </head>
  <body>
  <header class="mb-5">
        <nav class="navbar stiky-top navbar-expand-sm navbar-light bg-light py-3" id="nav-superior">
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

            <!-- Vai separar a view do produto em dois campos -->
            <div class="row row-cols-1 row-cols-lg-2">

                <!-- Aqui terá a imagem do produto -->
                <div id="div-container-img-produto" class="col-md-12 col-lg-7 mb-3">
                    <div id="stars"></div>
                    <div id="div-img-produto" class="m">
                        <img src="view/imagem/<?php echo $imagem ?>" width="250px" class="img-fluid" alt="Imagem Produto">
                    </div>
                </div>

                <!-- Aqui pode ter todas as informações, menos a descrição -->
                <div id="div-inf-produto" class="col-md-12 col-lg-5">

                    <div>
                        <!-- Aqui terá o nome do produto em negrito e o corazon-->
                        <div class="d-flex mb-lg-3  align-items-center justify-content-between">
                            <!-- Nome -->
                            <div>
                                <h1 class="title fs-lg-3 fs-4 m-0"><?php echo $nome_prod ?></h1>
                            </div>
                            <!-- Corazon -->
                            <span class="ms-1 ms-lg-0" id="dia" data-dia=1>
                                <?php ChecarFavorito($id)?>
                            </span>
                        </div>
                        <!-- Aqui terá a marca, acho que com um leve negrito -->
                        <div class="d-flex justify-content-between">
                            <p id="marca-buy" class="fs-5 my-3" ><?php echo $nome_distri ?></p>
                            <p id="categ-buy" class="fs-6 my-auto" ><?php echo $nome_categ ?></p>
                        </div>
                    </div>

                    <!-- Aqui terá o nosso grande - em visualização - preço do produto -->
                    <div class="d-flex justify-content-center align-items-center ">
                        <p id="preco-buy" class="fs-1" ><?php echo "R$$preco_prod" ?></p>
                    </div>

                    <!-- Aqui terá o botão "ADQUIRA" -->
                    <div class="div-btn-buy px-2">
                        <button type="button" class="btn btn-primary w-100 py-2 btn-buy" data-bs-toggle='modal' data-bs-target='#cadastro'>
                        Adicionar ao carrinho
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </main>
    <footer>
        
    </footer>
    <div class="modal fade" id="cadastro" tabindex="-1" aria-labelledby="cadastrarLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="cadastrarLabel">adicionar ao carrinho</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
              <form action="php/Cadastrar/adicionarCarrinho.php" method="POST"> 
                <div class="modal-body">
                <div class="w-100 d-none d-lg-block"></div>
                <input type='text' id='idEstado' value=<?php echo $id ?> hidden name='id'>
                  <div class="col-sm-10 col-md-8 col-lg-6">
                      <label  class="form-label">Nome do produto:<?php echo $nome_prod ?></label>
                  </div>
                  <div class="col-sm-10 col-md-8 col-lg-6">
                      <label  class="form-label">Distribuidora:<?php echo $nome_distri ?></label>
                  </div>
                  <div class="col-sm-10 col-md-8 col-lg-6">
                      <label  class="form-label">Categoria:<?php echo $nome_categ ?></label>
                  </div>
                  <input type="text" class="form-control" name="preco" value=<?php echo $preco_prod?> disabled>
                  <div class="mb-3">
                  <label for="qtdProduto" class="form-label">Quantidade</label>
                  <input type="number" class="form-control" name="quant" id="qtdProduto" placeholder="Quantidade">   
                </div>
              </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Cadastrar</button>
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                </div>
              </form>
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