<?php
session_start();
include "php/comandos.php";
include "php/Buscar.php";
$_SESSION["tipo"] = 2;
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
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
              <li class="breadcrumb-item active" aria-current="page">Administrar Vendedor</li>
              </ol>
          </nav>
        </div>

        <div class="my-4">
          <h1>
              Administrar Vendedor
           </h1>
        </div>
          <div class="input-group d-flex justify-content-end">
            <button type="button" class="btn btn-sm btn-primary d-flex me-1" id="btnCadastro" data-bs-toggle='modal' data-bs-target='#cadastro'>
              <p class="m-0">Cadastrar Vendedor <i class="ms-1 fs-5 bi bi-plus-square"></i></p>
            </button>
          </div>
         <hr>

        <!--CONTAINER ENDEREÇO CORPO-->
        <div class="endereco-body p-1 table-responsive mb-3">
                    
        <!--TABELA-->
        <table id='vendedor' class="table table-striped nowrap">
          <thead>
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>CPF</th>
                <th>NASCIMENTO</th>
                <th>TELEFONE</th>
                <th></th>
            </tr>
          </thead>
          <tbody>
            <?php
              BuscarFuncionario();
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
      <form action="php/Excluir/excluirFuncionario.php" method="POST">
        <div class="modal-body text-center">
          <h2 class="fs-4 mb-3">ATENÇÃO</h2>
          <p class="fs-5 m-auto">Você deseja realmente <span class="text-danger">excluir</span> este funcionário ?</p>
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
              <h2 class="modal-title fs-4" id="alterarLabel">Alterar Vendedor</h2>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
              <form action="php/Alterar/alterarVendedor.php" method="POST"> 
                <div class="modal-body">
                <input type='text' id='idVendedor' value='' hidden name='id'>
                  <div class="row">
                    <div class="col-sm-12 col-md-12 mb-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" class="form-control" name="nome" id="nomeVendedor" placeholder="Nome">
                    </div>
                    <div class="col-sm-12 col-md-6 mb-3">
                        <label for="cpf" class="form-label">CPF</label>
                        <input type="text" class="form-control" name="cpf" disabled id="cpf" placeholder="CPF">
                    </div>
                    <div class="col-sm-12 col-md-6 mb-3">
                        <label for="nascimento" class="form-label">Nascimento</label>
                        <input type="text" class="form-control" name="nasc" disabled id="nasc" placeholder="Nascimento">
                    </div>
                    <div class="col-sm-12 col-md-12 mb-3">
                        <label for="telefone" class="form-label">Telefone</label>
                        <input type="text" class="form-control" name="tele" id="tele" placeholder="Telefone">
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
<!-- MODAL CADASTRO -->
          <div class="modal fade" id="cadastro" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="modal-title fs-4" id="staticBackdropLabel">Cadastrar Vendedor</h2>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="php/Cadastrar/cadastrarUsuario.php" method="POST">
            <div class="row">
              <div class="col-sm-12">
                <div class="mb-3">
                  <label for="nomeFuncionario" class="form-label">Nome</label>
                  <input type="text" class="form-control" name="nome" id="nomeFuncionario" placeholder="Nome">
                </div>
              </div>
              <div class="col-sm-12">
                <div class="mb-3">
                  <label for="cpfFuncionario" class="form-label">CPF</label>
                  <input type="text" class="form-control" name="cpf" id="cpf1" placeholder="CPF">
                </div>
              </div>
              <div class="col-sm-12 col-md-6">
                <div class="mb-3">
                  <label for="teleFuncionario" class="form-label">Telefone</label>
                  <input type="text" class="form-control" name="telefone" id="tele1" placeholder="Telefone">
                </div>
              </div>
              <div class="col-sm-12 col-md-6">
                <div class="mb-3">
                  <label for="nascFuncionario" class="form-label">Nascimento</label>
                  <input type="date" class="form-control" name="nascimento" id="nascFuncionario" placeholder="CPF">
                </div>
              </div>
              <div class="col-sm-12">
                <div class="mb-3">
                  <label for="emailFuncionario" class="form-label">Email</label>
                  <input type="email" class="form-control" name="email" id="emailFuncionario" placeholder="Email">
                </div>
              </div>
              <div class="col-sm-12 col-md-6">
                <div class="mb-3">
                  <label for="senhaFuncionario" class="form-label">Senha</label>
                  <input type="password" class="form-control" name="senha" id="senhaFuncionario" placeholder="Senha">
                </div>
              </div>
              <div class="col-sm-12 col-md-6">
                <div class="mb-3">
                  <label for="confSenhaFuncionario" class="form-label">Confirme Senha</label>
                  <input type="password" class="form-control" id="confSenhaFuncionario" placeholder="Confirme Senha">
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Fechar</button>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
          </div>
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
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <script src="js/valores.js"></script>
    <script src="js/dataTable.js"></script>
    <script src="js/jquery.mask.js"></script>
  </body>
</html>