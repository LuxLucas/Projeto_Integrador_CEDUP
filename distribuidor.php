<?php
session_start();
include "php/comandos.php";
include "php/Buscar.php";
checarAdm();
if(isset($_SESSION['nome_distri']))
{
  $nome = $_SESSION['nome_distri'];
}else
{
  $nome = '';
}

if(isset($_SESSION['cnpj']))
{
  $cnpj = $_SESSION['cnpj'];
}else
{
  $cnpj = '';
}

if(isset($_SESSION['fantasia']))
{
  $fantasia = $_SESSION['fantasia'];
}else
{
  $fantasia = '';
}
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

    <title>BeauTIful - Administrar distribuidor</title>
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
              <li class="breadcrumb-item"><a href="index
            " class="text-primary">Home</a></li>
              <li class="breadcrumb-item"><a href="administrar
            " class="text-primary">Administração</a></li>
              <li class="breadcrumb-item"><a href="escolha-produto
            " class="text-primary">Administrar Produto</a></li>
              <li class="breadcrumb-item active" aria-current="page">Distribuidor</li>
              </ol>
          </nav>
        </div>

        <div class="my-4">
          <h1 class="title">
            Administrar Distribuidor
          </h1>
          <div class="input-group d-block-flex mt-3">
            <button type="button" class="btn btn-sm btn-primary d-flex" id="btnCadastro" data-bs-toggle='modal' data-bs-target='#cadastro'>
              <p class="m-0">Cadastrar Distribuidor <i class="ms-1 fs-5 bi bi-plus-square"></i></p>
            </button>
          </div>
        </div>
          

        <div class="border bg-white p-2 rounded-3">
          <!-- CONTAINER TABELA CORPO -->
            <div class="container-table-body p-1 table-responsive mb-3">
                
            <!-- TABELA -->
            <table id='distribuidor' class="table table-striped nowrap">
              <thead>
                  <tr>
                      <th>ID</th>
                      <th>NOME</th>
                      <th>CNPJ</th>
                      <th>FANTASIA</th>
                      <th></th>
                  </tr>
              </thead>
              <tbody>
                  <?php
                  BuscarDistribuidor();
                  ?>
              </tbody>
            </table>
            </div>
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
            <form action="php/Excluir/excluirDistribuidor
          " method="POST">
              <div class="modal-body text-center">
                <h2 class="fs-3 mb-3">ATENÇÃO</h2>
                <p class="fs-5 m-auto">Você deseja realmente <span class="text-danger">desativar</span> esta distribuidora?(isto ira desativar todos produtos dessa distribuidora)</p>
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
            <form action="php/ativar/ativarDistribuidora" method="POST">
              <div class="modal-body text-center">
                <h2 class="fs-3 mb-3">ATENÇÃO</h2>
                <p class="fs-5 m-auto">Você deseja realmente <span class="text-danger">ativar</span> esta distribuidora?(produtos devem ser reativados manualmente)</p>
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

      <div class="modal fade" id="alterar" data-bs-backdrop="static" tabindex="-1" aria-labelledby="alterarLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h2 class="modal-title fs-4" id="alterarLabel">Alterar Distribuidora</h2>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
              <form action="php/Alterar/alterarDistribuidora
            " method="POST"> 
                <div class="modal-body">
                <input type='text' id='idDistribuidora' value='' hidden name='id'>
                  <div class="row">
                    <div class="col-sm-10 col-md-12 mb-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" class="form-control" required name="nome" id="nomeDistribuidora" placeholder="Nome">
                    </div>
                    <div class="col-sm-10 col-md-7 mb-3">
                        <label for="fantasia" class="form-label">Nome fantasia</label>
                        <input type="text" class="form-control" required name="fantasia" id="nomeFantasia" placeholder="Nome Fantasia">
                    </div>
                    <div class="col-sm-10 col-md-5 mb-3">
                        <label for="cnpj" class="form-label">CNPJ</label>
                        <input type="text" class="form-control" required  name="cnpj" disabled id="cnpj" placeholder="CNPJ">
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
<!-- FIM. MODAL CADASTRAR -->
          <div class="modal fade" id="cadastro" data-bs-backdrop="static" tabindex="-1" aria-labelledby="cadastrarLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h2 class="modal-title fs-4" id="cadastrarLabel">Cadastrar Distribuidor</h2>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
              <form action="php/Cadastrar/cadastrarDistribuidora
            " method="POST"> 
                <div class="modal-body">
                  <div class="row g-1">
                    <div class="col-sm-12 mb-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" class="form-control" required value='<?php echo $nome ?>'
                         name="nome" id="nomeDistribuidora" placeholder="Nome">
                    </div>
                    
                    <div class="col-12 col-md-7 mb-3">
                        <label for="fantasia" class="form-label">Nome fantasia</label>
                        <input type="text" class="form-control" required value='<?php echo $fantasia ?>'
                        name="fantasia" id="nomeFantasia" placeholder="Nome Fantasia">
                    </div>
                    <div class="col-12 col-md-5 mb-3">
                        <label for="cnpj" class="form-label">CNPJ</label>
                        <input type="text" class="form-control" required value='<?php echo $cnpj ?>'
                         name="cnpj" id="cnpj2" placeholder="CNPJ">
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
<!-- FIM. OFFCANVAS -->
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