<?php
session_start();
include "php/comandos.php";
include "php/Buscar.php";
include "php/Selects.php";
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
        <!--CONTAINER DO CONTEÚDO-->
        <div class="container">

        <div class="mt-3">
          <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php" class="text-primary">Home</a></li>
              <li class="breadcrumb-item"><a href="administrar.php" class="text-primary">Administração</a></li>
              <li class="breadcrumb-item"><a href="escolha-produto.php" class="text-primary">Administrar Produto</a></li>
              <li class="breadcrumb-item active" aria-current="page">Produto</li>
              </ol>
          </nav>
        </div>

          <div class="my-4">
            <h1 class="title">
              Administrar Produto
            </h1>
          </div>
          <div class="input-group input-group-sm d-flex justify-content-end">
            <button type="button" class="btn btn-sm btn-primary d-flex me-1 text-center" id="btnCadastro" data-bs-toggle='modal' data-bs-target='#mdCadastrar'>
              <p class="m-0">Cadastrar Produto <i class="fs-5 bi bi-plus-square"></i></p> 
            </button>
          </div>
          <hr>

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
          <form action="php/Cadastrar/cadastrarProduto.php" method="POST" enctype="multipart/form-data">
          <div class="modal-body">
            <div class="row">
              <div class="col-sm-12">
                <div class="mb-3">
                  <label for="nomeProduto" class="form-label">Nome</label>
                  <input type="text" class="form-control" name="nome" id="nomeProduto1" placeholder="Nome">
                </div>
              </div>
              <div class="col-sm-12 col-md-6">
                <div class="mb-3">
                  <label for="precoProduto" class="form-label">Preço</label>
                  <input type="number" step="0.01" class="form-control" name="preco" id="precoProduto1" placeholder="Preço">
                </div>
              </div>
              <div class="col-sm-12 col-md-6">
                <div class="mb-3">
                  <label for="qtdProduto" class="form-label">Quantidade</label>
                  <input type="number" class="form-control" name="quantidade" id="qtdProduto1" placeholder="Quantidade">   
                </div>
              </div>
              <div class="col-sm-12 col-md-6">
                <div class="mb-3">
                  <label for="categProduto" class="form-label">Categoria</label>
                  <select class="form-select" name="categoria" id="categProduto1">
                    <option value="0" selected>Categoria</option>
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
                    <option value="0" selected>Distribuidora</option>
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
                  <textarea class="form-control"  name="descricao" id="descProduto1"></textarea> 
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
            <form action="php/Excluir/excluirProduto.php" method="POST">
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
<!-- FIM. MODAL ALTERAR -->
<div class="modal fade" id="alterar" tabindex="-1" data-bs-backdrop="static" aria-labelledby="alterarLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title fs-4" id="alterarLabel">Alterar Produto</h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="php/Alterar/alterarProduto.php" method="POST" enctype="multipart/form-data">
          <div class="modal-body">
            <div class="row">
              <div class="col-sm-12">
              <input type="text" class="form-control" name="id" id="idProduto" hidden>
                <div class="mb-3">
                  <label for="nomeProduto" class="form-label">Nome</label>
                  <input type="text" class="form-control" name="nome" id="nomeProduto" placeholder="Nome">
                </div>
              </div>
              <div class="col-sm-12 col-md-6">
                <div class="mb-3">
                  <label for="precoProduto" class="form-label">Preço</label>
                  <input type="number" step="0.01" class="form-control" name="preco" id="precoProduto" placeholder="Preço">
                </div>
              </div>
              <div class="col-sm-12 col-md-6">
                <div class="mb-3">
                  <label for="qtdProduto" class="form-label">Quantidade</label>
                  <input type="number" class="form-control" name="quantidade" id="qtdProduto" placeholder="Quantidade">   
                </div>
              </div>
              <div class="col-sm-12 col-md-6">
                <div class="mb-3">
                  <label for="categProduto" class="form-label">Categoria</label>
                  <select class="form-select" name="categoria" id="categProduto">
                    <option value="0" selected>Categoria</option>
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
                    <option value="0" selected>Distribuidora</option>
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
                  <textarea class="form-control"  name="descricao" id="descProduto"></textarea> 
                </div>
              </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary">Alterar</button>
      </div>
    </div>
</form>
</div>

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

    <!-- JavaScript -->
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <script src="js/valores.js"></script>
    <script src="js/dataTable.js"></script>
    <script src="js/jquery.mask.js"></script>
  </body>
</html>