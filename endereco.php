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

    <!-- DataTables -->
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

    <!-- Bootstrap CSS -->
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
        <!--CONTAINER DO CONTEÚDO-->
        <div class="container-fluid px-sm-1 px-md-2 px-lg-5 mt-5">

        <!--CONTAINER DOS CAMPOS DE ENDEREÇO-->
            <div class="endereco">

        <!--CONTAINER ENDEREÇO CABEÇA-->
              <div class="endereco-head mb-2 d-flex justify-content-between">
                <h1 class="title fs-4 m-0">Adiministrar Endereço</h1>
                <!-- Botão que ativa o modal -->
                <button type="button" class="btn btn-success" id="btnCadastro" data-bs-toggle="modal" data-bs-target="#cadastrar">
                  Cadastrar Endereço
                </button>
              </div>

        <!--CONTAINER ENDEREÇO CORPO-->
              <div class="endereco-body p-1 table-responsive mb-3">
                    
        <!--TABELA-->
                <table id='endereco' class="table table-striped nowrap">
                  <thead>
                    <tr>
                        <th>ID</th>
                        <th>ESTADO</th>
                        <th>CEP</th>
                        <th>MUNICÍPIO</th>
                        <th>BAIRRO</th>
                        <th>LOGRADOURO</th>
                        <th>COMPLEMENTO</th>
                        <th>AÇÕES</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    BuscarEndereco()
                    ?>
                  </tbody>
                </table>

              </div>
            </div>
        </div>
    </main>
    <footer>
        
    </footer>

    <!--Modal Excluir-->
    <div class="modal fade" id="excluir" tabindex="-1" aria-labelledby="excluirLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="excluirLabel">Excluir</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Voce deseja realmente excluir este item?</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary">Excluir</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Cadastrar -->
    <div class="modal fade" id="cadastrar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastrar Endereço</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

          <div class="row g-3 justify-content-center">
            <div class="col-12">
              <label for="municipio" class="form-label">Municipio</label>
              <input type="text" class="form-control" name="municipio" id="municipio" placeholder="Municipio">
            </div>
            <div class="col-12">
              <label for="bairro" class="form-label">Bairro</label>
              <input type="text" class="form-control" name="bairro" id="bairro" placeholder="Bairro">
            </div>
            <div class="col-12">
              <label for="logradouro" class="form-label">Logradouro</label>
              <input type="text" class="form-control" name="logradouro" id="logradouro" placeholder="Logradouro">
            </div>
            <div class="col-sm-12 col-md-6">
                <label for="telefone" class="form-label">Estado</label>
                <select name="estado" id="estado" class="form-select">
                    <option value="#">Estado</option>
                </select> 
            </div>
            <div class="col-sm-12 col-md-6">
              <label for="cep" class="form-label">CEP</label>
              <input type="text" class="form-control" name="cep" id="cep" placeholder="CEP">
            </div>
            <div class="col-12">
              <label for="Complemento" class="form-label">Complemento</label>
              <input type="text" class="form-control" name="complemento" id="complemento" placeholder="Complemento">
            </div>
          </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary">Cadastrar</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
          </div>
        </div>
      </div>
  </div>

    <!-- Modal Alterar -->
    <div class="modal fade" id="alterar" tabindex="-1" aria-labelledby="alterarLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="alterarLabel">alterar</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          <div class="w-100 d-none d-lg-block"></div>
            <div class="col-sm-10 col-md-8 col-lg-6">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome">
            </div>
          </div>
          <div class="modal-footer">
          <button type="button" class="btn btn-primary">alterar</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
          </div>
        </div>
      </div>
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