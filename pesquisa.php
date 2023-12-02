<?php
session_start();
include "php/comandos.php";
include "php/Buscar.php";
DestruirSalvo();
if(isset($_GET['pesquisa']))
{
$pesquisar = $_GET['pesquisa'];
$_SESSION['ultima_pesquisa'] = $pesquisar;
}else
{
 $pesquisar = $_SESSION['ultima_pesquisa'];
}
if(isset($_GET['categorias']))
{
    $categoria = $_GET['categorias'];
}else{
    $categoria = 0;
}
if(isset($_GET['distribuidora']))
{
    $distri = $_GET['distribuidora'];
}else{
    $distri = 0;
}
if(isset($_GET['preco']))
{
    $preco = $_GET['preco'];
}else{
    $preco = 0;
}
if(!isset($_GET['filtro']) || $_GET['filtro']==0 )
{
    $_SESSION['filtro'] = 0;
}else if($_GET['filtro']==1)
{
    $_SESSION['filtro'] = 1;
}else
{
    $_SESSION['filtro'] = 2;
}
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <link rel="stylesheet" href="view/css/estilo.css">
    <link rel="stylesheet" href="view/css/main.css">

    <title>BeauTIful - Buscando Produtos</title>
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
    </header>
    <main class="m-0 py-5">
        <div class="container">
            <div class="row g-3">
                <div class="col col-lg-3 d-none d-lg-block">
                    <div class="col-12 mb-2">
                        <button class="btn">
                            <p class="my-auto "><a href="<?php echo "pesquisa?pesquisa=$pesquisar&categorias=0&distribuidora=0&preco=0"?>" class="text-decoration-underline text-primary">Limpar Filtros <i class="bi bi-x-lg"></i></a></p>
                        </button>
                    </div>
                    <form action="pesquisa.php" method="get" id='FormFiltro'>
                    <div class="col-12 mb-3">
                        <div class="accordion accordion-flush border" id="acordeaoCateg">
                            <div class="accordion-item">
                                <h1 class="accordion-header tile">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCateg" aria-expanded="true" aria-controls="collapseCateg">
                                        Categorias
                                    </button>
                                </h1>
                                <div id="collapseCateg" class="accordion-collapse collapse show" data-bs-parent="#acordeaoCateg">
                                    <div class="accordion-body">
                                       <?php BuscarFiltroCategoria($categoria)?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mb-3">
                        <div class="accordion accordion-flush border" id="acordeaoDist">
                            <div class="accordion-item">
                                <h1 class="accordion-header tile">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDist" aria-expanded="true" aria-controls="collapseDist">
                                        Distribuidoras
                                    </button>
                                </h1>
                                <div id="collapseDist" class="accordion-collapse collapse show" data-bs-parent="#acordeaoDist">
                                    <div class="accordion-body">
                                 <?php BuscarFiltroDistribuidora($distri)?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mb-3">
                        <div class="accordion accordion-flush border" id="acordeaoPreco">
                            <div class="accordion-item">
                                <h1 class="accordion-header tile">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePreco" aria-expanded="true" aria-controls="collapsePreco">
                                        Por Preços
                                    </button>
                                </h1>
                                <div id="collapsePreco" class="accordion-collapse collapse show" data-bs-parent="#acordeaoPreco">
                                    <div class="accordion-body">
                                        <?php FiltroPreco($preco)?>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                 
                </div>

                <div class="col-12 col-lg-9">
                  <div class="row row-cols-1 g-3">
                    <div class="col-12">
                        <div class="d-block mb-1">
                           
                                <p class="fs-5 text-center text-lg-start">Mostrando resultados para <span class="text-primary text-truncate-2l d-inline"><strong><?php echo $pesquisar?></strong></span>
                            
                        </div>

                        <div class="d-none d-lg-flex justify-content-between border bg-white rounded-2 w-100 p-2">
<?php ContarPesquisa($pesquisar,$categoria,$distri,$preco)?>
                            <div class="d-flex">
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Ordenar <i class="bi bi-filter"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><button type="button" class="btn border-0 w-100 px-0"><a class="dropdown-item" href="<?php echo "pesquisa?pesquisa=$pesquisar&categorias=$categoria&distribuidora=$distri&filtro=0"?>">Ordem Alfabética</a></button></li>
                                        <li><button type="button" class="btn border-0 w-100 px-0"><a class="dropdown-item" href="<?php echo "pesquisa?pesquisa=$pesquisar&categorias=$categoria&distribuidora=$distri&filtro=1"?>">Menores Preços</a></button></li>
                                        <li><button type="button" class="btn border-0 w-100 px-0"><a class="dropdown-item" href="<?php echo "pesquisa?pesquisa=$pesquisar&categorias=$categoria&distribuidora=$distri&filtro=2"?>">Maiores Preços</a></button></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row row-cols-3 d-lg-none justify-content-between border bg-white  rounded-2 w-100 p-1 m-auto">
                            <div class="col d-flex align-items-center">
                                <div class="d-flex w-100 justify-content-center align-items-center">
                                    <p class="my-auto">
                                        <?php ContarPesquisa($pesquisar,$categoria,$distri,$preco)?> 
                                    </p>
                                </div>
                            </div>
                            <div class="col border-start border-end">
                                <div class="d-flex justify-content-center align-items-center">
                                    <button type="button" class="btn rounded-0 text-center w-100" data-bs-toggle="offcanvas" data-bs-target="#offFiltro" aria-controls="offFiltro">
                                        <p class="m-0">
                                            Filtrar <i class="bi bi-funnel"></i>
                                        </p>
                                    </button>
                                </div>
                            </div>
                            <div class="col">
                                <div class="d-flex justify-content-center align-items-center w-100">
                                    <div class="dropdown">
                                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Ordenar <i class="bi bi-filter"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                        <li><button type="button" class="btn border-0 w-100 px-0"><a class="dropdown-item" href="<?php echo "pesquisa?pesquisa=$pesquisar&categorias=$categoria&distribuidora=$distri&filtro=0"?>">Ordem Alfabética</a></button></li>
                                        <li><button type="button" class="btn border-0 w-100 px-0"><a class="dropdown-item" href="<?php echo "pesquisa?pesquisa=$pesquisar&categorias=$categoria&distribuidora=$distri&filtro=1"?>">Menores Preços</a></button></li>
                                        <li><button type="button" class="btn border-0 w-100 px-0"><a class="dropdown-item" href="<?php echo "pesquisa?pesquisa=$pesquisar&categorias=$categoria&distribuidora=$distri&filtro=2"?>">Maiores Preços</a></button></li>
            
                                    </ul>
                                </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                     <!-- CARTÃO PRODUTO -->
                        <div class="row position-relative bottom-0">
                            <?php
                            pesquisando($pesquisar,$categoria,$distri,$preco);
                            ?>
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
    <!--  OFFCANVAS FILTRO-->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offFiltro" aria-labelledby="offFiltroLabel">
        <div class="offcanvas-header bg-white">
            <h2 class="offcanvas-title title" id="offFiltroLabel">Filtrar</h2>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <hr class="m-0 text-primary">
        <div class="offcanvas-body bg-fundo">
            <div class="row g-3">
                <div class="col-12">
                        <button class="btn border-0">
                            <p class="my-auto"><a class="text-underline text-primary text-decoration-underline" href="<?php echo "pesquisa?pesquisa=$pesquisar&categorias=0&distribuidora=0&preco=0"?>">Limpar Filtros <i class="bi bi-x-lg"></i></a></p>
                        </button>
                </div>
                <form action="pesquisa.php" method="get" id='FormFiltro2'>
                <div class="col">
                    <div class="accordion accordion-flush border" id="acordeaoCateg">
                                    <div class="accordion-item">
                                        <h1 class="accordion-header title">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCateg" aria-expanded="true" aria-controls="collapseCateg">
                                                Categorias
                                            </button>
                                        </h1>
                                        <div id="collapseCateg" class="accordion-collapse collapse" data-bs-parent="#acordeaoCateg">
                                            <div class="accordion-body">
                                            <?php BuscarFiltroCategoria2($categoria)?>
                                            </div>
                                        </div>
                                    </div>
                    </div>
                </div>
                <div class="col-12">
                        <div class="accordion accordion-flush border" id="acordeaoDist">
                            <div class="accordion-item">
                                <h1 class="accordion-header tile">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDist" aria-expanded="true" aria-controls="collapseDist">
                                        Distribuidoras
                                    </button>
                                </h1>
                                <div id="collapseDist" class="accordion-collapse collapse" data-bs-parent="#acordeaoDist">
                                    <div class="accordion-body">
                     <?php BuscarFiltroDistribuidora2($distri)?>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="col-12">
                        <div class="accordion accordion-flush border" id="acordeaoPreco">
                            <div class="accordion-item">
                                <h1 class="accordion-header tile">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePreco" aria-expanded="true" aria-controls="collapsePreco">
                                        Por Preços
                                    </button>
                                </h1>
                                <div id="collapsePreco" class="accordion-collapse collapse" data-bs-parent="#acordeaoPreco">
                                    <div class="accordion-body">
                                      <?php FiltroPreco2($preco)?>
</form>
                                    </div>
                                </div>
                            </div>
                        </div>
                 </div>
</div>
    </div>
    </div>
    <!-- FIM. OFFCANVAS-->
    <div class="offcanvas offcanvas-lg bg-fundo offcanvas-start d-lg-none" tabindex="-1" aria-labelledby="#offcanvasResponsiveLabel" id="menuOffCanvas">
            <!-- OFFCANVAS CABEÇALHO-->
            <div class="offcanvas-header bg-white">
                <h2 class="offcanvas-title fs-3" id="offcanvasResponsivelLabel">Menu</h2>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#menuOffCanvas" aria-label="Close"></button>
            </div>
            <hr class="m-0 text-primary">
            <!-- OFFCANVAS CORPO-->
            <div class="offcanvas-body bg-fundo">
            <div class="coluna">
                <?php NavLogado(); ?>
            </div>
        </div>
    </div>
    <!-- JavaScript -->
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <script src="js/jquery.mask.js"></script>
    <script src="js/valores.js"></script>
  </body>
</html>