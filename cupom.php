<?php
session_start();
include "php/comandos.php";
include "php/Buscar.php";
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
              <li class="breadcrumb-item active" aria-current="page">Administrar Cupom</li>
              </ol>
          </nav>
        </div>

        <!--CONTAINER DOS CAMPOS DE CUPOM-->
            <div class="endereco">

         <div class="my-4">
           <h1>
              Administrar Cupom
           </h1>
         </div>
          <div class="input-group d-flex justify-content-end">
            <button type="button" class="btn btn-sm btn-primary d-flex me-1" id="btnCadastro" data-bs-toggle='modal' data-bs-target='#cadastro'>
              <p class="m-0">Cadastrar Cupom <i class="ms-1 fs-5 bi bi-plus-square"></i></p>
            </button>
          </div>
         <hr>

        <!--CONTAINER CUPOM CORPO-->
              <div class="endereco-body p-1 table-responsive mb-3">
                    
        <!--TABELA-->
        <table id='cupom' class="table table-striped nowrap" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>VALOR</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            BuscarCupom();
            ?>
        </tbody>
        </table>
                </div>

        </div>
    </main>
    <footer>
        
    </footer>

<!-- MODAL EXCLUIR -->
    <div class="modal fade" id="excluir" tabindex="-1" aria-labelledby="excluirLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="php/Excluir/excluirCupom.php" method="POST">
              <div class="modal-body text-center">
                <h2 class="fs-3 mb-3">ATENÇÃO</h2>
                <p class="fs-5 m-auto">Você deseja realmente <span class="text-danger">excluir</span> este cupom ?</p>
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
      <div class="modal fade" id="alterar" data-bs-backdrop="static" tabindex="-1" aria-labelledby="alterarLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h2 class="modal-title fs-4" id="alterarLabel">Alterar Cupom</h2>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
              <form action="php/Alterar/alterarCupom.php" method="POST"> 
                <div class="modal-body">
                <input type='text' id='idCupom' value='' hidden name='id'>
                  <div class="row">
                    <div class="col-sm-10 col-md-6 mb-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" class="form-control" name="codigo" id="codigoCupom" placeholder="Nome">
                    </div>
                    <div class="col-sm-10 col-md-6 mb-3">
                        <label for="desconto" class="form-label">Desconto</label>
                        <input type="text" class="form-control" name="desconto" id="descontoCupom" placeholder="Desconto">
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
          </div>
<!-- FIM. MODAL CADASTRAR -->
          <div class="modal fade" id="cadastro" data-bs-backdrop="static" tabindex="-1" aria-labelledby="cadastrarLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h2 class="modal-title fs-4" id="cadastrarLabel">Cadastrar Cupom</h2>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
              <form action="php/Cadastrar/cadastrarCupom.php" method="POST"> 
                <div class="modal-body">
                  <div class="row">
                    <div class="col-sm-12 col-md-6 mb-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" class="form-control" name="codigo" id="codigoCupom" placeholder="Nome">
                    </div>
                    <div class="col-sm-12 col-md-6 mb-3">
                        <label for="desconto" class="form-label">Desconto</label>
                        <input type="text" class="form-control" name="desconto" id="descontoCupom" placeholder="Desconto">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Fechar</button>
                  <button type="submit" class="btn btn-primary">Cadastrar</button>
                </div>
              </form>
              </div>
            </div>
          </div>
<!-- FIM. MODAL DE ERRO -->
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
<!-- FIM. -->
      <!-- JavaScript -->
    <script src="js/dataTable.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <script src="js/valores.js"></script>
    <script src="js/jquery.mask.js"></script>
  </body>
</html>