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
        <div class="container">
                    
        <div class="mt-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php" class="text-primary">Home</a></li>
                        <li class="breadcrumb-item"><a href="administrar.php" class="text-primary">Administração</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Endereço</li>
                    </ol>
                </nav>
            </div>
            <div class="my-4">
                <h1>Endereço</h1>
            </div>
            <hr>        

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
                    Tabela Município
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
                            <table class="table table-striped px-0 mb-3" id="municipio">
                                <thead>
                                    <th>ID</th>
                                    <th>NOME</th>
                                    <th></th>
                                </thead>
                                <tbody>
                                  <td>1</td>
                                  <td>CRICIÚMA</td>
                                  <td>
                                    <div class='d-flex justify-content-end'>
                                      <button class='btn btn-sm btn-success pe-1 ps-2 me-2' data-bs-toggle='modal' data-bs-target='#modAltMunicipio' onclick='alterarMunicipio(this)'><p class='my-auto me-1'>Editar <i class='ms-1 bi bi-pen-fill'></i></p>
                                      </button>
                                      <button class='btn btn-sm btn-danger pe-1 ps-2' data-bs-toggle='modal' data-bs-target='#modDelMunicipio'  onclick='excluindo(this)'><p class='my-auto me-1'>Excluir <i class='ms-1 bi bi-trash3-fill' ></i></p>
                                      </button>
                                    </div>
                                  </td>
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
                                    <th></th>
                                </thead>
                                <tbody>
                                  <td>1</td>
                                  <td>ANA MARIA</td>
                                  <td>
                                    <div class='d-flex justify-content-end'>
                                      <button class='btn btn-sm btn-success pe-1 ps-2 me-2' data-bs-toggle='modal' data-bs-target='#modAltBairro' onclick='alterarBairro(this)'><p class='my-auto me-1'>Editar <i class='ms-1 bi bi-pen-fill'></i></p>
                                      </button>
                                      <button class='btn btn-sm btn-danger pe-1 ps-2' data-bs-toggle='modal' data-bs-target='#modDelBairro'  onclick='excluindo(this)'><p class='my-auto me-1'>Excluir <i class='ms-1 bi bi-trash3-fill' ></i></p>
                                      </button>
                                    </div>
                                  </td>
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
<!-- FIM. ACORDEÃO LOGRADOURO -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="fs-5 accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#tabelaCinco" aria-expanded="false" aria-controls="tabelaCinco">
                    Tabela Logradouro
                </button>
                </h2>
                <div id="tabelaCinco" class="accordion-collapse collapse" data-bs-parent="#acordeaoTabelas">
                    <div class="accordion-body">
                      <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-sm btn-primary d-flex me-1" id="btnCadLogradouro" data-bs-toggle='modal' data-bs-target='#modCadLogradouro'>
                          <p class="m-0">Cadastrar Logradouro <i class="ms-1 fs-5 bi bi-plus-square"></i></p>
                        </button>
                      </div>
                      <hr>
                        <div class="row table-responsive mb-3">
                            <div class="col-12">
                            <table class="table table-striped px-0 mb-3" id="logradouro">
                                <thead>
                                    <th>ID</th>
                                    <th>NOME</th>
                                    <th></th>
                                </thead>
                                <tbody>
                                  <td>1</td>
                                  <td>AVENIDA GÍLIO BÚRIGO</td>
                                  <td>
                                    <div class='d-flex justify-content-end'>
                                      <button class='btn btn-sm btn-success pe-1 ps-2 me-2' data-bs-toggle='modal' data-bs-target='#modAltLogradouro' onclick='alterarLogradouro(this)'><p class='my-auto me-1'>Editar <i class='ms-1 bi bi-pen-fill'></i></p>
                                      </button>
                                      <button class='btn btn-sm btn-danger pe-1 ps-2' data-bs-toggle='modal' data-bs-target='#modDelLogradouro'  onclick='excluindo(this)'><p class='my-auto me-1'>Excluir <i class='ms-1 bi bi-trash3-fill' ></i></p>
                                      </button>
                                    </div>
                                  </td>
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
<!-- FIM. ACORDEÃO COMPLEMENTO -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="fs-5 accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#tabelaSeis" aria-expanded="false" aria-controls="tabelaSeis">
                    Tabela Complemento
                </button>
                </h2>
                <div id="tabelaSeis" class="accordion-collapse collapse" data-bs-parent="#acordeaoTabelas">
                    <div class="accordion-body">
                      <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-sm btn-primary d-flex me-1" id="btnCadComplemento" data-bs-toggle='modal' data-bs-target='#modCadComplemento'>
                          <p class="m-0">Cadastrar Complemento <i class="ms-1 fs-5 bi bi-plus-square"></i></p>
                        </button>
                      </div>
                      <hr>
                        <div class="row table-responsive mb-3">
                            <div class="col-12">
                            <table class="table table-striped px-0 mb-3" id="Complemento">
                                <thead>
                                    <th>ID</th>
                                    <th>NOME</th>
                                    <th>CEP</th>
                                    <th></th>
                                </thead>
                                <tbody>
                                  <td>1</td>
                                  <td><p class="text-truncate-1l">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe veritatis praesentium accusamus fugit voluptatibus et laboriosam error commodi quam deleniti. Quidem repellat omnis laborum doloremque deleniti? Odio voluptatibus nulla officia sint deserunt nihil qui perspiciatis fugit ex consequuntur beatae, dolore numquam saepe harum sit voluptas esse molestias omnis, a eos quidem? Modi atque nobis numquam consectetur sed dignissimos et vero, explicabo incidunt obcaecati architecto natus facere ipsum harum est? Error consectetur voluptates ipsam ducimus maiores rerum voluptas inventore eveniet sequi. Fugit soluta animi ex error vero, sit expedita distinctio odit?</p></td>
                                  <td>88815-318</td>
                                  <td>
                                    <div class='d-flex justify-content-end'>
                                      <button class='btn btn-sm btn-success pe-1 ps-2 me-2' data-bs-toggle='modal' data-bs-target='#modAltComplemento' onclick='alterarComplemento(this)'><p class='my-auto me-1'>Editar <i class='ms-1 bi bi-pen-fill'></i></p>
                                      </button>
                                      <button class='btn btn-sm btn-danger pe-1 ps-2' data-bs-toggle='modal' data-bs-target='#modDelComplemento'  onclick='excluindo(this)'><p class='my-auto me-1'>Excluir <i class='ms-1 bi bi-trash3-fill' ></i></p>
                                      </button>
                                    </div>
                                  </td>
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>             
        </div>
    </main>
    <footer>
        
    </footer>

<!--MODAIS DE EXCLUSÃO-->

<!-- PAÍS -->
    <div class="modal fade" id="modDelPais" tabindex="-1" aria-labelledby="excluirLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="php/Excluir/excluirPais.php" method="POST">
              <div class="modal-body text-center">
                <h2 class="fs-3 mb-3">ATENÇÃO</h2>
                <p class="fs-5 m-auto">Você deseja realmente <span class="text-danger">excluir</span> este país ?</p>
                <input type='text' id='excluirIDPais' class="d-flex-none" value='' name='id' hidden>
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
    <div class="modal fade" id="modDelEstado" tabindex="-1" aria-labelledby="excluirLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="php/Excluir/excluirEstado.php" method="POST">
              <div class="modal-body text-center">
                <h2 class="fs-3 mb-3">ATENÇÃO</h2>
                <p class="fs-5 m-auto">Você deseja realmente <span class="text-danger">excluir</span> este estado ?</p>
                <input type='text' id='excluirIDEstado' class="d-flex-none" value='' name='id' hidden>
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
    <div class="modal fade" id="modDelMunicipio" tabindex="-1" aria-labelledby="excluirLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="php/Excluir/excluirMunicipio.php" method="POST">
              <div class="modal-body text-center">
                <h2 class="fs-3 mb-3">ATENÇÃO</h2>
                <p class="fs-5 m-auto">Você deseja realmente <span class="text-danger">excluir</span> este município ?</p>
                <input type='text' id='excluirIDMunicipio' class="d-flex-none" value='' name='id' hidden>
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
    <div class="modal fade" id="modDelBairro" tabindex="-1" aria-labelledby="excluirLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="php/Excluir/excluirBairro.php" method="POST">
              <div class="modal-body text-center">
                <h2 class="fs-3 mb-3">ATENÇÃO</h2>
                <p class="fs-5 m-auto">Você deseja realmente <span class="text-danger">excluir</span> este bairro ?</p>
                <input type='text' id='excluirIDBairro' class="d-flex-none" value='' name='id' hidden>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-outline-danger">Excluir</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
              </div>
            </form>
          </div>
        </div>
    </div>
<!-- LOGRADOURO -->
    <div class="modal fade" id="modDelLogradouro" tabindex="-1" aria-labelledby="excluirLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="php/Excluir/excluirLogradouro.php" method="POST">
              <div class="modal-body text-center">
                <h2 class="fs-3 mb-3">ATENÇÃO</h2>
                <p class="fs-5 m-auto">Você deseja realmente <span class="text-danger">excluir</span> este logradouro ?</p>
                <input type='text' id='excluirIDLogradouro' class="d-flex-none" value='' name='id' hidden>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-outline-danger">Excluir</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
              </div>
            </form>
          </div>
        </div>
    </div>
<!-- COMPLEMENTO -->
    <div class="modal fade" id="modDelComplemento" tabindex="-1" aria-labelledby="excluirLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="php/Excluir/excluirComplemento.php" method="POST">
              <div class="modal-body text-center">
                <h2 class="fs-3 mb-3">ATENÇÃO</h2>
                <p class="fs-5 m-auto">Você deseja realmente <span class="text-danger">excluir</span> este complemento ?</p>
                <input type='text' id='excluirIDComplemento' class="d-flex-none" value='' name='id' hidden>
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

<!-- PAÍS -->
      <div class="modal fade" id="modCadPais" data-bs-backdrop="static" tabindex="-1" aria-labelledby="cadastrarLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-4" id="cadastrarLabel">Cadastrar País</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
              <form action="php/Cadastrar/cadastrarPais.php" method="POST"> 
                <div class="modal-body">
                  <div>
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control " name="nome" id="nomePais" placeholder="Nome">
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
            <form action="php/Cadastrar/cadastrarEstado.php" method="POST"> 
            <div class="modal-body">
                  <div class="row">
                    <div class="col-sm-10 col-md-10 mb-3">
                      <label for="nome" class="form-label">Nome</label>
                      <input type="text" class="form-control" name="nome" id="nomeEstado" placeholder="Nome">
                    </div>
                    <div class="col-sm-10 col-md-6 mb-3">
                      <label for="sigla" class="form-label">Sigla</label>
                      <input type="text" class="form-control" name="Sigla" id="siglaEstado" placeholder="Sigla">
                    </div>
                    <div class="col-sm-10 col-md-6 mb-3">
                      <label for="pais" class="form-label">Paises</label>
                      <select name="pais" id="paises" class="form-select">
                        <?php //Pais()?>
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
              <h1 class="modal-title fs-4" id="cadastrarLabel">Cadastrar Município</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
              <form action="php/Cadastrar/cadastrarMunicipio.php" method="POST"> 
                <div class="modal-body">
                  <div>
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control " name="nome" id="nomeMunicipio" placeholder="Nome">
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
              <form action="php/Cadastrar/cadastrarBairro.php" method="POST"> 
                <div class="modal-body">
                  <div>
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control " name="nome" id="nomeBairro" placeholder="Nome">
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
<!-- LOGRADOURO -->
      <div class="modal fade" id="modCadLogradouro" data-bs-backdrop="static" tabindex="-1" aria-labelledby="cadastrarLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-4" id="cadastrarLabel">Cadastrar Logradouro</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
              <form action="php/Cadastrar/cadastrarLogradouro.php" method="POST"> 
                <div class="modal-body">
                  <div>
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control " name="nome" id="nomeLogradouro" placeholder="Nome">
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
<!-- COMPLEMENTO -->
<div class="modal fade" id="modCadComplemento" data-bs-backdrop="static" tabindex="-1" aria-labelledby="cadastrarLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-4" id="cadastrarLabel">Cadastrar Complemento</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
              <form action="php/Cadastrar/cadastrarComplemento.php" method="POST"> 
                <div class="modal-body">
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
            <form action="php/Alterar/alterarPais.php" method="POST"> 
              <div class="modal-body">
              <input type='text' id='idPais' value='' hidden name='id'>
                <div>
                  <label for="nome" class="form-label">Nome</label>
                  <input type="text" class="form-control" name="nome" id="nomePais" placeholder="Nome">
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
            <form action="php/Alterar/alterarEstado.php" method="POST"> 
              <div class="modal-body">
              <input type='text' id='idEstado' value='' hidden name='id'>
                <div class="row">
                  <div class="col-sm-10 col-md-10 mb-3">
                      <label for="nome" class="form-label">Nome</label>
                      <input type="text" class="form-control" name="nome" id="nomeEstado" placeholder="Nome">
                  </div>
                  <div class="col-sm-10 col-md-6 mb-3">
                      <label for="sigla" class="form-label">Sigla</label>
                      <input type="text" class="form-control" name="sigla" id="siglaEstado" placeholder="sigla">
                  </div>
                  <div class="col-sm-10 col-md-6 mb-3">
                  <label for="pais" class="form-label">Países</label>
                      <select name="pais" id="paises" class="form-select">
                        <?php //Pais(); ?>
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
              <h1 class="modal-title fs-4" id="alterarLabel">Alterar Município</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="php/Alterar/alterarMunicipio.php" method="POST"> 
              <div class="modal-body">
              <input type='text' id='idMunicipio' value='' hidden name='id'>
                <div>
                  <label for="nome" class="form-label">Nome</label>
                  <input type="text" class="form-control" name="nome" id="nomeMunicipio" placeholder="Nome">
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
<!-- BAIRRO -->
      <div class="modal fade" id="modAltBairro" data-bs-backdrop="static" tabindex="-1" aria-labelledby="altBairro" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-4" id="alterarLabel">Alterar Bairro</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="php/Alterar/alterarBairro.php" method="POST"> 
              <div class="modal-body">
              <input type='text' id='idBairro' value='' hidden name='id'>
                <div>
                  <label for="nome" class="form-label">Nome</label>
                  <input type="text" class="form-control" name="nome" id="nomeBairro" placeholder="Nome">
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
            <form action="php/Alterar/alterarLogradouro.php" method="POST"> 
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
            <form action="php/Alterar/alterarComplemento.php" method="POST"> 
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
<!-- FIM. -->

    <!-- JavaScript -->
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <script src="js/valores.js"></script>
    <script src="js/dataTable.js"></script>
    <script src="js/jquery.mask.js"></script>
  </body>
</html>