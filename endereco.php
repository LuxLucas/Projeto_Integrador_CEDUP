<?php
session_start();
include "php/comandos.php";
include "php/Buscar.php";
include "php/Selects.php";
checarAdm();
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
                        <li class="breadcrumb-item"><a href="index" class="text-primary">Home</a></li>
                        <li class="breadcrumb-item"><a href="administrar" class="text-primary">Administração</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Endereço</li>
                    </ol>
                </nav>
            </div>
            <div class="my-4">
                <h1>Endereço</h1>
            </div>

            <div class="p-2 border bg-white rounded-3">
              <div class="accordion accordion-flush" id="acordeaoTabelas">
                
              <!-- ACORDEÃO PAÍS -->
              <div class="accordion-item">
                  <h2 class="accordion-header">
                  <button class="fs-5 accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#tabelaUm" aria-expanded="false" aria-controls="tabelaUm">
                      Tabela País
                  </button>
                  </h2>
                  <div id="tabelaUm" class="accordion-collapse collapse" data-bs-parent="#acordeaoTabelas">
                      <div class="accordion-body">
                        <div class="d-flex justify-content-end">
                          <button type="button" class="btn btn-sm btn-primary d-flex me-1" id="btnCadPais" data-bs-toggle='modal' data-bs-target='#modCadPais'>
                            <p class="m-0">Cadastrar País <i class="ms-1 fs-5 bi bi-plus-square"></i></p>
                          </button>
                        </div>
                        <hr>
                          <div class="row table-responsive mb-3">
                              <div class="col-12">
                              <table class="table table-striped px-0 mb-3" id="pais">
                                  <thead>
                                      <th>ID</th>
                                      <th>NOME</th>
                                      <th></th>
                                  </thead>
                                  <tbody>
                                    <?php BuscarPais()?>
                                  </tbody>
                              </table>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- FIM. ACORDEÃO ESTADO -->
              <div class="accordion-item">
                  <h2 class="accordion-header">
                  <button class="fs-5 accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#tabelaDois" aria-expanded="false" aria-controls="tabelaDois">
                      Tabela Estado
                  </button>
                  </h2>
                  <div id="tabelaDois" class="accordion-collapse collapse" data-bs-parent="#acordeaoTabelas">
                      <div class="accordion-body">
                      <div class="d-flex justify-content-end">
                          <button type="button" class="btn btn-sm btn-primary d-flex me-1" id="btnCadEstado" data-bs-toggle='modal' data-bs-target='#modCadEstado'>
                            <p class="m-0">Cadastrar Estado <i class="ms-1 fs-5 bi bi-plus-square"></i></p>
                          </button>
                        </div>
                        <hr>
                          <div class="row table-responsive mb-3">
                              <div class="col-12">
                              <table class="table table-striped px-0 mb-3" id="estado">
                                  <thead>
                                      <th>ID</th>
                                      <th>NOME</th>
                                      <th>SIGLA</th>
                                      <th>PAÍS</th>
                                      <th></th>
                                  </thead>
                                  <tbody>
                                    <?php BuscarEstado()?>
                                  </tbody>
                              </table>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- FIM. ACORDEÃO MUNICÍPIO -->
              <div class="accordion-item">
                  <h2 class="accordion-header">
                  <button class="fs-5 accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#tabelaTres" aria-expanded="false" aria-controls="tabelaTres">
                      Tabela Cidade
                  </button>
                  </h2>
                  <div id="tabelaTres" class="accordion-collapse collapse" data-bs-parent="#acordeaoTabelas">
                      <div class="accordion-body">
                        <div class="d-flex justify-content-end">
                          <button type="button" class="btn btn-sm btn-primary d-flex me-1" id="btnCadMunicipio" data-bs-toggle='modal' data-bs-target='#modCadMunicipio'>
                            <p class="m-0">Cadastrar Município <i class="ms-1 fs-5 bi bi-plus-square"></i></p>
                          </button>
                        </div>
                        <hr>
                          <div class="row table-responsive mb-3">
                              <div class="col-12">
                                <table class="table table-striped px-0 mb-3" id="cidade">
                                    <thead>
                                        <th>ID</th>
                                        <th>NOME</th>
                                        <th>ESTADO</th>
                                        <th></th>
                                    </thead>
                                    <tbody>
                                    <?php BuscarCidade()?>
                                    </tbody>
                                </table>
                              </div>
                          </div>
                      </div>
                  </div>
                  
              </div> 
              <!-- FIM. ACORDEÃO BAIRRO -->
              <div class="accordion-item">
                  <h2 class="accordion-header">
                  <button class="fs-5 accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#tabelaQuatro" aria-expanded="false" aria-controls="tabelaQuatro">
                      Tabela Bairro
                  </button>
                  </h2>
                  <div id="tabelaQuatro" class="accordion-collapse collapse" data-bs-parent="#acordeaoTabelas">
                      <div class="accordion-body">
                        <div class="d-flex justify-content-end">
                          <button type="button" class="btn btn-sm btn-primary d-flex me-1" id="btnCadBairro" data-bs-toggle='modal' data-bs-target='#modCadBairro'>
                            <p class="m-0">Cadastrar Bairro <i class="ms-1 fs-5 bi bi-plus-square"></i></p>
                          </button>
                        </div>
                        <hr>
                          <div class="row table-responsive mb-3">
                              <div class="col-12">
                              <table class="table table-striped px-0 mb-3" id="bairro">
                                  <thead>
                                      <th>ID</th>
                                      <th>NOME</th>
                                      <th>CIDADE</th>
                                      <th></th>
                                  </thead>
                                  <tbody>
                                  <?php BuscarBairro()?>
                                  </tbody>
                              </table>
                              </div>
                          </div>
                      </div>
                  </div>
              </div> 
              <!-- FIM. ACORDEÃO LOGRADOURO -->
             
              </div>  
              <!-- FIM. ACORDEÃO COMPLEMENTO -->
              
    </main>
    <footer>
        
    </footer>

<!--MODAIS DE EXCLUSÃO-->

<!-- PAÍS -->
    <div class="modal fade" id="excluirPais" tabindex="-1" aria-labelledby="excluirLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="php/Excluir/excluirPais" method="POST">
              <div class="modal-body text-center">
                <h2 class="fs-3 mb-3">ATENÇÃO</h2>
                <p class="fs-5 m-auto">Você deseja realmente <span class="text-danger">excluir</span> este país ?</p>
                <input type='text' id='excluirIDPais' class="d-flex-none" hidden value='' name='id1'>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-outline-danger">Excluir</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
              </div>
            </form>
          </div>
        </div>
    </div>
<!-- ESTADO -->
    <div class="modal fade" id="excluirEstado" tabindex="-1" aria-labelledby="excluirLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="php/Excluir/excluirEstado" method="POST">
              <div class="modal-body text-center">
                <h2 class="fs-3 mb-3">ATENÇÃO</h2>
                <p class="fs-5 m-auto">Você deseja realmente <span class="text-danger">excluir</span> este estado ?</p>
                <input type='text' id='excluirIDEstado' class="d-flex-none" value='' name='id2' hidden>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-outline-danger">Excluir</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
              </div>
            </form>
          </div>
        </div>
    </div>
<!-- MUNICÍPIO -->
    <div class="modal fade" id="excluirCidade" tabindex="-1" aria-labelledby="excluirLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="php/Excluir/excluirCidade" method="POST">
              <div class="modal-body text-center">
                <h2 class="fs-3 mb-3">ATENÇÃO</h2>
                <p class="fs-5 m-auto">Você deseja realmente <span class="text-danger">excluir</span> este município ?</p>
                <input type='text' id='excluirIDCidade' class="d-flex-none" value='' name='id3' hidden>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-outline-danger">Excluir</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
              </div>
            </form>
          </div>
        </div>
    </div>
<!-- BAIRRO -->
    <div class="modal fade" id="excluirBairro" tabindex="-1" aria-labelledby="excluirLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="php/Excluir/excluirBairro" method="POST">
              <div class="modal-body text-center">
                <h2 class="fs-3 mb-3">ATENÇÃO</h2>
                <p class="fs-5 m-auto">Você deseja realmente <span class="text-danger">excluir</span> este bairro ?</p>
                <input type='text' id='excluirIDBairro' class="d-flex-none" value='' name='id4' hidden>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-outline-danger">Excluir</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
              </div>
            </form>
          </div>
        </div>
    </div>

<!-- FIM. MODAIS DE CADASTRO -->
<!--MODAIS DE EXCLUSÃO-->

<!-- PAÍS -->
<div class="modal fade" id="ativarPais" tabindex="-1" aria-labelledby="AtivarLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="php/ativar/ativarPais" method="POST">
              <div class="modal-body text-center">
                <h2 class="fs-3 mb-3">ATENÇÃO</h2>
                <p class="fs-5 m-auto">Você deseja realmente <span class="text-danger">Ativar</span> este país ?</p>
                <input type='text' id='ativarIDPais' class="d-flex-none" hidden value='' name='id1'>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-outline-danger">Ativar</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
              </div>
            </form>
          </div>
        </div>
    </div>
<!-- ESTADO -->
    <div class="modal fade" id="ativarEstado" tabindex="-1" aria-labelledby="AtivarLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="php/ativar/ativarEstado" method="POST">
              <div class="modal-body text-center">
                <h2 class="fs-3 mb-3">ATENÇÃO</h2>
                <p class="fs-5 m-auto">Você deseja realmente <span class="text-danger">Ativar</span> este estado ?</p>
                <input type='text' id='AtivarIDEstado' class="d-flex-none" value='' name='id2' hidden>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-outline-danger">Ativar</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
              </div>
            </form>
          </div>
        </div>
    </div>
<!-- MUNICÍPIO -->
    <div class="modal fade" id="ativarCidade" tabindex="-1" aria-labelledby="AtivarLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="php/ativar/ativarCidade" method="POST">
              <div class="modal-body text-center">
                <h2 class="fs-3 mb-3">ATENÇÃO</h2>
                <p class="fs-5 m-auto">Você deseja realmente <span class="text-danger">Ativar</span> este município ?</p>
                <input type='text' id='AtivarIDCidade' class="d-flex-none" value='' name='id3' hidden>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-outline-danger">Ativar</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
              </div>
            </form>
          </div>
        </div>
    </div>
<!-- BAIRRO -->
    <div class="modal fade" id="ativarBairro" tabindex="-1" aria-labelledby="AtivarLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="php/ativar/ativarBairro" method="POST">
              <div class="modal-body text-center">
                <h2 class="fs-3 mb-3">ATENÇÃO</h2>
                <p class="fs-5 m-auto">Você deseja realmente <span class="text-danger">Ativar</span> este bairro ?</p>
                <input type='text' id='AtivarIDBairro' class="d-flex-none" value='' name='id4' hidden>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-outline-danger">Ativar</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
              </div>
            </form>
          </div>
        </div>
    </div>

<!-- FIM. MODAIS DE CADASTRO -->

<!-- PAÍS -->
      <div class="modal fade" id="modCadPais" data-bs-backdrop="static" tabindex="-1" aria-labelledby="cadastrarLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-4" id="cadastrarLabel">Cadastrar País</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
              <form action="php/Cadastrar/cadastrarPais" method="POST"> 
                <div class="modal-body">
                  <div>
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control " name="nomePais"  placeholder="Nome">
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
<!-- ESTADO -->
      <div class="modal fade" id="modCadEstado" data-bs-backdrop="static" tabindex="-1" aria-labelledby="cadastrarLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-4" id="cadastrarLabel">Cadastrar Estado</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="php/Cadastrar/cadastrarEstado" method="POST"> 
            <div class="modal-body">
                  <div class="row">
                    <div class="col-sm-10 col-md-10 mb-3">
                      <label for="nome" class="form-label">Nome</label>
                      <input type="text" class="form-control" name="nomeEstado"  placeholder="Nome">
                    </div>
                    <div class="col-sm-10 col-md-6 mb-3">
                      <label for="sigla" class="form-label">Sigla</label>
                      <input type="text" class="form-control" name="Sigla"  placeholder="Sigla">
                    </div>
                    <div class="col-sm-10 col-md-6 mb-3">
                      <label for="pais" class="form-label">Paises</label>
                      <select name="pais"  class="form-select">
                      <?php Pais()?>
                      </select>
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
<!-- MUNICÍPIO -->
      <div class="modal fade" id="modCadMunicipio" data-bs-backdrop="static" tabindex="-1" aria-labelledby="cadastrarLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-4" id="cadastrarLabel">Cadastrar Cidade</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
              <form action="php/Cadastrar/cadastrarCidade" method="POST"> 
                <div class="modal-body">
                  <div>
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control " name="nomeCidade" placeholder="Nome">
                  </div>
                  <div class="col-sm-10 col-md-6 mb-3">
                      <label for="estado" class="form-label">estados</label>
                      <select name="estado" class="form-select">
                      <?php estado()?>
                      </select>
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
<!-- BAIRRO -->
      <div class="modal fade" id="modCadBairro" data-bs-backdrop="static" tabindex="-1" aria-labelledby="cadastrarLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-4" id="cadastrarLabel">Cadastrar Bairro</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
              <form action="php/Cadastrar/cadastrarBairro" method="POST"> 
                <div class="modal-body">
                  <div>
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control " name="nomeBairro" placeholder="Nome">
                    <div class="col-sm-10 col-md-6 mb-3">
                      <label for="estado" class="form-label">cidades</label>
                      <select name="cidade"  class="form-select">
                      <?php Cidade()?>
                      </select>
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

<!-- FIM. MODAIS DE ALTERAÇÃO -->

<!-- PAÍS -->
      <div class="modal fade" id="modAltPais" data-bs-backdrop="static" tabindex="-1" aria-labelledby="alterarLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-4" id="alterarLabel">Alterar País</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="php/Alterar/alterarPais" method="POST"> 
              <div class="modal-body">
              <input type='text' id='idPais' value='' hidden name='idPais'>
                <div>
                  <label for="nome" class="form-label">Nome</label>
                  <input type="text" class="form-control" name="nomePais1" id="nomePais" placeholder="Nome">
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
<!-- ESTADO -->
  <div class="modal fade" id="modAltEstado" data-bs-backdrop="static" tabindex="-1" aria-labelledby="altEstado" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-4" id="alterarLabel">Alterar Estado</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="php/Alterar/alterarEstado" method="POST"> 
              <div class="modal-body">
              <input type='text' id='idEstado' value='' hidden name='idEstado'>
                <div class="row">
                  <div class="col-sm-10 col-md-10 mb-3">
                      <label for="nome" class="form-label">Nome</label>
                      <input type="text" class="form-control" name="nomeEstado1" id="nomeEstado" placeholder="Nome">
                  </div>
                  <div class="col-sm-10 col-md-6 mb-3">
                      <label for="sigla" class="form-label">Sigla</label>
                      <input type="text" class="form-control" name="Sigla1" id="siglaEstado" placeholder="sigla">
                  </div>
                  <div class="col-sm-10 col-md-6 mb-3">
                  <label for="pais" class="form-label">Países</label>
                      <select name="pais1" id="paises" class="form-select">
                      <?php Pais()?>
                      </select>
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
<!-- MUNICÍPIO -->
       <div class="modal fade" id="modAltMunicipio" data-bs-backdrop="static" tabindex="-1" aria-labelledby="altMunicipio" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-4" id="alterarLabel">Alterar Cidade</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="php/Alterar/alterarCidade" method="POST"> 
              <div class="modal-body">
              <input type='text' id='idCidade' value='' hidden name='idCidade'>
                <div>
                  <label for="nome" class="form-label">Nome</label>
                  <input type="text" class="form-control" name="nomeCidade1" id="nomeCidade" placeholder="Nome">
                </div>
                <div class="col-sm-10 col-md-6 mb-3">
                      <label for="estado" class="form-label">estados</label>
                      <select name="estado1" id="estados" class="form-select">
                      <?php estado()?>
                      </select>
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

<!-- BAIRRO -->
      <div class="modal fade" id="modAltBairro" data-bs-backdrop="static" tabindex="-1" aria-labelledby="altBairro" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-4" id="alterarLabel">Alterar Bairro</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="php/Alterar/alterarBairro" method="POST"> 
              <div class="modal-body">
              <input type='text' id='idBairro' value='' hidden name='idBairro'>
                <div>
                  <label for="nome" class="form-label">Nome</label>
                  <input type="text" class="form-control" name="nomeBairro1" id="nomeBairro" placeholder="Nome">
                </div>
                <div class="col-sm-10 col-md-6 mb-3">
                      <label for="estado" class="form-label">cidades</label>
                      <select name="cidade1" id="cidades" class="form-select">
                      <?php Cidade()?>
                      </select>
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
<!-- LOGRADOURO -->
      <div class="modal fade" id="modAltLogradouro" data-bs-backdrop="static" tabindex="-1" aria-labelledby="altLogradouro" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-4" id="alterarLabel">Alterar Logradouro</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="php/Alterar/alterarLogradouro" method="POST"> 
              <div class="modal-body">
              <input type='text' id='idLogradouro' value='' hidden name='id'>
                <div>
                  <label for="nome" class="form-label">Nome</label>
                  <input type="text" class="form-control" name="nome" id="nomeLogradouro" placeholder="Nome">
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
<!-- COMPLEMENTO -->
      <div class="modal fade" id="modAltComplemento" data-bs-backdrop="static" tabindex="-1" aria-labelledby="altComplemento" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-4" id="alterarLabel">Alterar Complemento</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="php/Alterar/alterarComplemento" method="POST"> 
              <div class="modal-body">
              <input type='text' id='idComplemento' value='' hidden name='id'>
              <div class="row">
                    <div class="col-12 col-md-8 mb-3">
                      <label for="cep" class="form-label">CEP</label>
                      <input type="text" class="form-control " name="cep" id="cepComplemento" placeholder="CEP">
                    </div>
                    <div class="col-12 mb-3">
                      <label for="complemento" class="form-label">Complemento</label>
                      <textarea type="text" class="form-control " name="complemento" id="descComplemento" placeholder="Complemento"></textarea>
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
    <script src="js/valores.js"></script>
    <script src="js/dataTable.js"></script>
    <script src="js/jquery.mask.js"></script>
  </body>
</html>