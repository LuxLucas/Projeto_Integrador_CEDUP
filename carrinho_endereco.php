<?php
session_start();
include "php/comandos.php";
include "php/Buscar.php";
include "php/Selects.php";

//$id = $_GET['id'];
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
  <nav class="navbar navbar-expand-sm navbar-light bg-light py-3" id="nav-superior">
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
        <div class="mt-3">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php" class="text-primary">Home</a></li>
              <li class="breadcrumb-item"><a href="carrinho.php" class="text-primary">Bolsinha</a></li>
              <li class="breadcrumb-item active" aria-current="page">Endereço-Compra</li>
            </ol>
          </nav>
        </div>
            <div class="my-4">
                <h2>Selecione seu endereço</h1>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-12 col-lg-4">
                    <div class="input-group">
                        <select name="selectPais" id="selectPais" class="form-select">
                           <?php Pais()?>
                        </select>
                    </div>
                </div>
                    <div class="col-sm-12 col-lg-8">
                        <div class="d-flex justify-content-between justify-content-md-end  mt-3 mt-lg-0">
                            <button type="button" class="btn btn-outline-primary me-2" data-bs-target="#cadEndereco" data-bs-toggle="modal">
                             <p class="my-auto">Novo endereço <i class="bi bi-plus-circle ms-1"></i></p>
                            </button>
                            <button type="button" class="btn btn-primary ms-2">
                                <p class="my-auto">Finalizar Compra <i class="bi bi-handbag-fill ms-1" ></i></p>
                            </button>
                        </div>
                    </div>
            </div>
            <hr>
          <div class="row">
            <div class="col-12 table-responsive">

              <table class="table table-striped px-0 mb-3" id="endCompra">
                <thead>
                    <th>ID</th>
                    <th>ESTADO</th>
                    <th>CEP</th>
                    <th>MUNICÍPIO</th>
                    <th>BAIRRO</th>
                    <th>LOGRADOURO</th>
                    <th>COMPLEMENTO</th>
                    <th></th>
                </thead>
                <tbody>
                 <?php EnderecosBrasil()?>
                </tbody>
              </table>
            </div>
           
    </main>
    <footer>
        
    </footer>

    <!-- MODAIS -->

    <!-- Modal Cadastrar -->
        <div class="modal fade" id="cadEndereco" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastrar Endereço</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                <div class="row g-3 justify-content-center">
                    <div class="col-sm-12 col-md-5">
                    <label for="municipio" class="form-label">Municipio</label>
                    <input type="text" class="form-control" name="municipio" id="municipio" placeholder="Municipio">
                    </div>
                    <div class="col-sm-12 col-md-3">
                        <label for="telefone" class="form-label">Estado</label>
                        <select name="estado" id="estado" class="form-select">
                           <?php Estado() ?>
                        </select> 
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <label for="cep" class="form-label">CEP</label>
                        <input type="text" class="form-control" name="cep" id="cep" placeholder="CEP">
                    </div>
                    <div class="col-sm-12 col-md-6">
                    <label for="bairro" class="form-label">Bairro</label>
                    <input type="text" class="form-control" name="bairro" id="bairro" placeholder="Bairro">
                    </div>
                    <div class="col-sm-12 col-md-6">
                    <label for="logradouro" class="form-label">Logradouro</label>
                    <input type="text" class="form-control" name="logradouro" id="logradouro" placeholder="Logradouro">
                    </div>
                    <div class="col-12">
                        <label for="Complemento" class="form-label">Complemento</label>
                        <textarea type="text" class="form-control" name="complemento" id="complemento" placeholder="Complemento"></textarea>
                    </div>
                </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-success" onclick="cadastrarEnd()">Cadastrar</button>
                    
                </div>
                </div>
            </div>
        </div>
    <!--  FIM MODAIS -->

    <!-- JavaScript -->
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <script src="js/valores.js"></script>
    <script src="js/jquery.mask.js"></script>
  </body>
</html>