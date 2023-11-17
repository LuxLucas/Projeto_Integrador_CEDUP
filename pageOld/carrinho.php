<?php
session_start();
include "php/comandos.php";
include "php/Buscar.php";
include "php/Selects.php";

$id = $_GET['id'];
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
                        <form class="d-flex" role="search" action="pesquisa.php" method="get">
                            <div class="input-group">
                                <input class="form-control be-0" name="pesquisa" type="search" placeholder="Procure algo" aria-label="Search">
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
        <!--CONTAINER DO CONTEÚDO-->
        <div class="container-fluid px-sm-1 px-md-2 px-lg-5 mt-5">

        <!--CONTAINER DOS CAMPOS DE ENDEREÇO-->
            <div class="endereco">

        <!-- CONTAINER TABELA TÍTULO -->
        <div class="container-table-head d-flex justify-content-between mb-2">
          <h1 class="title fs-4 m-0">
            Administrar Produto
          </h1>
          <button type="button" class="btn btnUpdate btn-success d-flex me-1" data-bs-target="#requisitarPaís" data-bs-toggle="modal">Prosseguir</button>
        </div>

        <!--CONTAINER ENDEREÇO CORPO-->
                <div class="endereco-body p-1 table-responsive mb-3">
                    
        <!--TABELA-->
        <table id='carrinho' class="table nowrap align-middle" style="width:100%">
        <thead>
            <tr>
                <th>N° VENDA</th>
                <th>IMAGEM</th>
                <th>NOME</th>
                <th>PREÇO</th>
                <th>QTD</th>
                <th>TOTAL</th>
                <th>ESTOQUE</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            BuscarCarrinho($id);
            ?>
        </tbody>
        </table>
                </div>
            </div>

        </div>
    </main>
    <footer>
        
    </footer>

    <div class="modal fade" id="requisitarPaís" aria-hidden="true" aria-labelledby="requisitarPaísLabel" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="requisitarPaísLabel">Selecione Seu País</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="row justify-content-center">
              <form action="carrinho_endereco.php" method="GET">
              <div class="col-md-10 col-sm-12">
                <select class="form-select" name="selectPais" id="selectPais">
                  <option value="0">Seu País</option>
                  <?php Pais() ?>
                </select>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Continuar</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            </form>
          </div>
        </div>
      </div>
    </div>

      <div class="modal fade" id="excluir" tabindex="-1" aria-labelledby="excluirLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="excluirLabel">Excluir</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="php/Excluir/excluirCarrinho.php" method="POST">
            <div class="modal-body">
              <p>Voce deseja realmente excluir este item?</p>
              <input type='text' id='excluirID' value='' name='id' hidden>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Excluir</button>
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            </div>
          </form>
        </div>
      </div>
    </div>

      <div class="modal fade" id="excluir" tabindex="-1" aria-labelledby="excluirLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="excluirLabel">Excluir</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="php/Excluir/excluirCarrinho.php" method="POST">
            <div class="modal-body">
              <p>Voce deseja realmente excluir este item?</p>
              <input type='text' id='excluirID' value='' name='id' hidden>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Excluir</button>
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            </div>
          </form>
        </div>
      </div>
    </div>

      <div class="modal fade" id="alterarQtd" tabindex="-1" aria-labelledby="alterarLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="alterarLabel">Alterar Quantidade</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="php/Alterar/alterarCarrinho.php" method="POST"> 
              <div class="modal-body">
              
              <input type='text' id='id' name='id' value='' hidden>

                <div class="row row-cols-1 g-3">
                  <div class="col-6">
                    <label for="qtdProduto" class="form-label">Quantidade</label>
                    <input type="number" class="form-control" name="qtd" id="qtdProduto" placeholder="Quantidade">
                  </div>
                  <div class="col-6">
                    <input type="number" class="form-control" name="preco" id="precoProd" hidden>
                  </div>
                  <div class="col-12">
                    <p id="total_quant">Total armazenado: 12</p>
                  </div>
                </div>

              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Alterar</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
              </div>
            </form>
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
    <script>
      let carrinho  = new DataTable('#carrinho');
    </script>
 <script src="js/jquery.mask.js"></script>
  </body>
</html>