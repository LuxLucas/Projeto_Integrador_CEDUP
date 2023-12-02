<?php
session_start();
include "php/comandos.php";
include "php/Buscar.php";
include "php/Selects.php";
DestruirSalvo();
checarAdm();
if(isset($_SESSION['nome_prod']))
{
  $nome = $_SESSION['nome_prod'];
}else
{
  $nome = '';
}
if(isset($_SESSION['descri_prod']))
{
  $descri = $_SESSION['descri_prod'];
}else
{
  $descri = '';
}
if(isset($_SESSION['preco_prod']))
{
  $preco = $_SESSION['preco_prod'];
}else
{
  $preco = '';
}
if(isset($_SESSION['quant_prod']))
{
  $quant = $_SESSION['quant_prod'];
}else
{
  $quant = '';
}
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

    <title>BeauTIful - Administrar produto</title>
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
    <main class="py-2">
        <!--CONTAINER DO CONTEÚDO-->
        <div class="container">

        <div class="mt-3">
          <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="administrar" class="text-primary">Administração</a></li>
              <li class="breadcrumb-item"><a href="escolha-produto" class="text-primary">Administrar Produto</a></li>
              <li class="breadcrumb-item active" aria-current="page">Produto</li>
              </ol>
          </nav>
        </div>

          <div class="my-4 d-block-flex">
            <h1 class="title">
              Administrar Produto
            </h1>
            <div class="input-group input-group-sm mt-3">
              <button type="button" class="btn btn-sm btn-primary d-flex me-1 text-center" id="btnCadastro" data-bs-toggle='modal' data-bs-target='#mdCadastrar'>
                <p class="m-0">Cadastrar Produto <i class="fs-5 bi bi-plus-square"></i></p> 
              </button>
            </div>
          </div>
        <div class="border bg-white rounded-3 p-2">
          <!--CONTAINER ENDEREÇO CORPO-->
          <div class="endereco-body p-1 table-responsive mb-3">
          
          <!--TABELA-->
          <table id='produto' class="table table-striped nowrap">
          <thead>
              <tr>
                  <th>ID</th>
                  <th>IMAGEM</th>
                  <th>NOME</th>
                  <th>PREÇO</th>
                  <th>QTD</th>
                  <th>DISTRIBUIDORA</th>
                  <th>CATEGORIA</th>
                  <th>DESCRIÇÃO</th>
                  <th></th>
              </tr>
          </thead>
          <tbody>
              <?php
              BuscarProduto();
              ?>
          </tbody>
          </table>
          </div>
        </div>

        </div>
    </main>
    <footer>
        
    </footer>
<!-- MODAL CADASTRAR -->
    <div class="modal fade" id="mdCadastrar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="modal-title fs-4" id="staticBackdropLabel">Cadastrar Produto</h2>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="php/Cadastrar/cadastrarProduto" method="POST" enctype="multipart/form-data">
          <div class="modal-body">
            <div class="row">
              <div class="col-sm-12">
                <div class="mb-3">
                  <label for="nomeProduto" class="form-label">Nome</label>
                  <input type="text" class="form-control" required value='<?php echo $nome?>' 
                  name="nome" id="nomeProduto1" placeholder="Nome">
                </div>
              </div>
              <div class="col-sm-12 col-md-6">
                <div class="mb-3">
                  <label for="precoProduto" class="form-label">Preço</label>
                  <input type="number" step="0.01" class="form-control" required value='<?php echo $preco?>' 
                   name="preco" id="precoProduto1" placeholder="Preço">
                </div>
              </div>
              <div class="col-sm-12 col-md-6">
                <div class="mb-3">
                  <label for="qtdProduto" class="form-label">Quantidade</label>
                  <input type="number" class="form-control" required value='<?php echo $quant?>' 
                   name="quantidade" id="qtdProduto1" placeholder="Quantidade">   
                </div>
              </div>
              <div class="col-sm-12 col-md-6">
                <div class="mb-3">
                  <label for="categProduto" class="form-label">Categoria</label>
                  <select class="form-select" name="categoria" id="categProduto1">
                    <?php
                    Categoria();
                    ?>
                  </select>  
                </div>
              </div>
              <div class="col-sm-12 col-md-6">
                <div class="mb-3">
                  <label for="distProduto" class="form-label">Distribuidor</label>
                  <select class="form-select" name="distribuidora" id="distProduto1">
                    <?php
                    Distribuidora();
                    ?>
                  </select>  
                </div>
              </div>

              <div class="col-12">
                <div class="mb-3">
                  <label class="form-label" for="fotoProduto">Upload Imagem</label>
                  <input type="file" class="form-control" name="photo" id="foto1">
                </div>
              </div>

              <div class="col">
                <div class="mb-3">
                  <label for="descProduto" class="form-label">Descrição</label>
                  <textarea class="form-control"  name="descricao" id="descProduto1" required>
                  <?php echo $quant?>
                  </textarea> 
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Fechar</button>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
          </div>
        </div>
</form>
      </div>
    </div>


<!-- FIM. MODAL EXCLUIR -->
    <div class="modal fade" id="excluir" tabindex="-1" aria-labelledby="excluirLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="php/Excluir/excluirProduto" method="POST">
              <div class="modal-body text-center">
                <h2 class="fs-3 mb-3">ATENÇÃO</h2>
                <p class="fs-5 m-auto">Você deseja realmente <span class="text-danger">excluir</span> este produto ?</p>
                <input type='text' id='excluirID' class="d-flex-none" value='' name='id' hidden>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-outline-danger">Excluir</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
              </div>
            </form>
          </div>
        </div>
    </div>
    <!--FIM. MODAL Ativar -->
<div class="modal fade" id="ativar" tabindex="-1" aria-labelledby="ativarLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="php/ativar/ativarProduto" method="POST">
              <div class="modal-body text-center">
                <h2 class="fs-3 mb-3">ATENÇÃO</h2>
                <p class="fs-5 m-auto">Você deseja realmente <span class="text-danger">ativar</span> este produto ?</p>
                <input type='text' id='ativarID' class="d-flex-none" value='' name='id' hidden>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-outline-danger">Ativar</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
              </div>
            </form>
          </div>
        </div>
    </div>
<!-- FIM. MODAL ALTERAR -->
<div class="modal fade" id="alterar" tabindex="-1" data-bs-backdrop="static" aria-labelledby="alterarLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title fs-4" id="alterarLabel">Alterar Produto</h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="php/Alterar/alterarProduto" method="POST" enctype="multipart/form-data">
          <div class="modal-body">
            <div class="row">
              <div class="col-sm-12">
              <input type="text" class="form-control" name="id" id="idProduto" hidden>
                <div class="mb-3">
                  <label for="nomeProduto" class="form-label">Nome</label>
                  <input type="text" class="form-control" required name="nome" id="nomeProduto" placeholder="Nome">
                </div>
              </div>
              <div class="col-sm-12 col-md-6">
                <div class="mb-3">
                  <label for="precoProduto" class="form-label">Preço</label>
                  <input type="number" step="0.01" class="form-control" required name="preco" id="precoProduto" placeholder="Preço">
                </div>
              </div>
              <div class="col-sm-12 col-md-6">
                <div class="mb-3">
                  <label for="qtdProduto" class="form-label">Quantidade</label>
                  <input type="number" class="form-control" name="quantidade" required id="qtdProduto" placeholder="Quantidade">   
                </div>
              </div>
              <div class="col-sm-12 col-md-6">
                <div class="mb-3">
                  <label for="categProduto" class="form-label">Categoria</label>
                  <select class="form-select" name="categoria" id="categProduto">
                    
                    <?php
                    Categoria();
                    ?>
                  </select>  
                </div>
              </div>
              <div class="col-sm-12 col-md-6">
                <div class="mb-3">
                  <label for="distProduto" class="form-label">Distribuidor</label>
                  <select class="form-select" name="distribuidora" id="distProduto">
  
                    <?php
                    Distribuidora();
                    ?>
                  </select>  
                </div>
              </div>

              <div class="col-12">
                <div class="mb-3">
                  <label class="form-label" for="photo">Upload Imagem </label>
                  <input type="file" class="form-control" name="photo" id="foto">
                  <p class="text-body-secondary text-end mt-1">(Apenas adicione algo se quiser mudar a foto)</p>
                </div>
              </div>

              <div class="col">
                <div class="mb-3">
                  <label for="descProduto" class="form-label">Descrição</label>
                  <textarea class="form-control"  name="descricao" required id="descProduto"></textarea> 
                </div>
              </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary">Alterar</button>
      </div>
    </form>
    </div>
  </div>
</div>

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

    <div class="modal" id="erro" data-erro=<?php VerificarErro()?> tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <h1 class="modal-title fs-4 mb-3">ERRO</h1>
        <p id="texto_erro" class="m-0 fs-5"></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>

    <!-- JavaScript -->
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <script src="js/valores.js"></script>
    <script src="js/dataTable.js"></script>
    <script src="js/jquery.mask.js"></script>
  </body>
</html>