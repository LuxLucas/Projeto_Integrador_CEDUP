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
$descricao = $dados[5];
$quant = $dados[6];
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

    <title>BeauTIful - Veja nossos produtos</title>
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
    <main class="py-2">
        <div class="container mt-5 pb-5">
            <div class="row alig-items-center mt-3">
                
                <!-- Imagem de produto -->
                <div class="col-sm-12 col-lg-7">
                    <div class="border bg-white rounded-3 p-md-3 p-1 h-100">
                    <div class="d-flex justify-content-end">
                     <?php ProdFavorito($id)?>
                    </div>
                        <div class="d-flex justify-content-center align-items-center m-auto">
                            <div class="d-flex justify-content-center align-items-center divImgProduto">
                                <img src="view/imagem/<?php echo$imagem?>" class="img-fluid h-100" alt="Imagem do produto">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Informações de produto -->
                <div class="col-sm-12 col-lg-5 mt-4 my-lg-0">
                    <div class="border rounded-3 px-3 pt-3 pb-4 bg-white">
                        <div class="row">
                        
                            <div class="col-12">
                                <h1 class="fs-2 text-break text-truncate-3l titulo" id="nomeProd">
                                <?php echo$nome_prod?>
                                </h1>
                            </div>
                            <div class="col-12 my-1 my-lg-2">
                                <div class="d-flex justify-content-between">
                                    <p class="text-body-secondary text-truncate-1l fs-4"><?php echo$nome_categ?></p>
                                    <p class="text-body-secondary text-truncate-1l fs-4"><?php echo$nome_distri?></p>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="border p-1 p-md-3 py-4 bg-white rounded-3 mx-0 mx-md-3">
                                    <form action='php/Cadastrar/adicionarCarrinho.php' method='POST'>
                                    <div class="row g-3">
                                        
                                        <div class="col-sm-12 col-md-6 ps-3 mb-2">
                                            <div class="d-flex d-md-flex justify-content-center justify-content-md-between">
                                                <p class="fs-2 my-auto text-center text-md-start">
                                                    <strong>R$<span id='precoProdutoView' name='preco'> <?php echo$preco_prod?> </span></strong>
                                                </p>
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="col-sm-12 col-md-6 px-3">
                                        <p class="mb-2 text-center">Em estoque: <strong><?php echo $quant?></strong></p>
                                            <div class="input-group d-flex align-items-center justify-content-center rounded-pill mb-3 mb-md-0">
                                                    <button type="button" id='menos' class="btn border border-end bg-grey-claro rounded-start-pill shadow-sm btn-light btn-plus">
                                                        <i class="bi bi-dash-lg"></i>
                                                    </button>
                                                    <input type="text" name="quant" id="qtdProdutoView" class="form-control  text-center" value="1">
                                                    <button type="button" id='mais' class="btn border-start bg-grey-claro rounded-end-pill shadow-sm btn-light btn-plus border">
                                                        <i class="bi bi-plus"></i>
                                                    </button>
                                            </div>
                                        </div>
                                        <input type="text" name='id' value='<?php echo $id?>' hidden >
                                        <div class="col-12 px-3">
                                            <button type="submit" class="btn btn-primary py-2 w-100">
                                                <strong>ADQUIRA</strong>
                                            </button>
                                        </div>
                                       
                                    </div>
</form>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                </div>
                <!-- Descrição -->
                <div class="col-sm-12 col-lg-7 mt-4">
                    <div class="border rounded-3 p-3 bg-white">
                        <h2>Descrição</h2>
                        <hr>
                        <p><?php echo$descricao?>
</p>
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
    <script src="js/comandos.js"></script>
    <script src="js/jquery.mask.js"></script>
    <script src="js/valores.js"></script>
  </body>
</html>