<?php
session_start();
include "php/comandos.php";
include "php/Buscar.php";
include "php/Selects.php";
include "php/conexao.php";
$id = $_SESSION['id'];
$comando = "select id_venda from vendas where cod_usu=$id and status_venda=0";
$pesquisa = mysqli_query($conexao,$comando);
$existe = mysqli_num_rows($pesquisa);
if($existe==0)
{
    header("location:index");
}
checarLogado();
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

    <title>BeauTIful - Escolha de endereço</title>
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
        <nav id="nav-inferior" class="nav nav-underline navbar navbar-expand-sm p-0">
            <div class="container d-none d-lg-flex">
            <div class="navbar-nav w-100 d-flex justify-content-between">
            <a class="nav-link text-light" href="pesquisa.php?categorias=15&preco=0&pesquisa=">PERFUMES</a>
                    <a class="nav-link text-light" href="pesquisa.php?categorias=16&preco=0&pesquisa=">CORPO E BANHO</a>
                    <a class="nav-link text-light" href="pesquisa.php?categorias=17&preco=0&pesquisa=">MAQUIAGEM</a>
                    <a class="nav-link text-light" href="pesquisa.php?categorias=18&preco=0&pesquisa=">CABELO</a>
                    <a class="nav-link text-light" href="pesquisa.php?categorias=19&preco=0&pesquisa=">INFANTIL</a>
                    <a class="nav-link text-light" href="pesquisa.php?categorias=20&preco=0&pesquisa=">SKINCARE</a>
            </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="container pt-3">
            <div class="my-5">
                <h1 class="text-center">Seu Endereço</h1>
            </div>
            
          <div class="row g-3">
            <div class="col-12 col-lg-9 table-responsive">
                <div class="d-flex justify-content-between border bg-white p-2 mb-3 rounded-1">
                    <div class="input-group w-50">
                        <select name="selectPais" id="selectPais" class="form-select">
                           <?php Pais()?>
                        </select>
                    </div>
                    <button type="button" id='btn_endereco' class="btn btn-primary" data-bs-target="#cadEndereco" data-bs-toggle="modal">
                         <p class="my-auto">Novo endereço <i class="bi bi-plus-circle ms-1"></i></p>
                    </button>
                </div>
              <div class="p-2 rounded-3 bg-white border">
                  <table class="table table-striped px-0 mb-3" id="endCompra">
                    <thead>
                        <th>ID</th>
                        <th>ESTADO</th>
                        <th>CIDADE</th>
                        <th>BAIRRO</th>
                        <th>LOGRADOURO</th>
                        <th>COMPLEMENTO</th>
                        <th></th>
                    </thead>
                    <tbody>
                        <?php BuscarEnderecos('Brasil',$id)?>
                    </tbody>
                  </table>
              </div>
            </div>
           <div class="col-12 col-lg-3 mb-4">
            <?php InformacoesVenda2()?>
                    </div>
           </div>
           <div class="mt-5 mb-2">
                <h2 class="title text-center mb-4">Ainda quer mais ?</h2>
                <div class="row row-cols-lg-4 row-cols-md-3 g-3">
         <?php recem_adicionados()?>
                </div>
            </div>
    </main>
    <footer>
        <div class="container">
            <div class="row g-3 pb-1 pt-3">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="w-100 d-flex justify-content-md-start justify-content-center">
                        <div class="d-inline-block text-center text-md-start">
                            <p class="text-white">&copy; 2023 - Beautiful Ltda</p>
                            <p class="text-white">Av. Gílio Búrigo, 2144, Criciúma/SC</p>
                            <p class="text-white">CNPJ: 99.999.999/0001-99</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="w-100 d-flex justify-content-md-end justify-content-center justify-content-lg-center">
                        <div class="d-inline-block text-center text-md-end text-lg-center">
                            <p class="text-white"><a href="#">Política de Privacidade</a></p>
                            <p class="text-white"><a href="#">Termos de Uso</a></p>
                            <p class="text-white"><a href="#">Quem Somos ?</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="w-100 d-flex justify-content-center justify-content-lg-end">
                        <div class="d-inline-block text-lg-end text-center">
                            <p class="text-white"><strong>Nosso Contato</strong></p>
                            <p class="text-white">beautiful.cosmeticos@gmail.com</p>
                            <p class="text-white">+55 (48) 99962-7044</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- MODAIS -->

    <!-- Modal Cadastrar -->
        <div class="modal fade" id="cadEndereco" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title fs-4" id="exampleModalLabel">Cadastrar Endereço</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form method='POST' action='php/Cadastrar/cadastrarEndereco.php'>
                <div class="row g-3 justify-content-center">
                    <div class="col-sm-12 col-md-5">
                        <label for="telefone" class="form-label">Estado</label>
                        <select name="estado" id="inputEstado" class="form-select">
                            <option value=0>Selecionar</option>
                        </select> 
                    </div>
                    <div class="col-sm-12 col-md-5">
                    <label for="municipio" class="form-label">Municipio</label>
                    <select name="cidade" disabled id="inputCidade" class="form-select">
                    <option value=0>Selecionar</option>
                        </select> 
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <label for="cep" class="form-label">Bairro</label>
                        <select name="bairro" disabled id="inputBairro" class="form-select">
                        <option value=0>Selecionar</option>
                        </select> 
                    </div>
                    <div class="col-sm-12 col-md-6">
                    <label for="bairro" class="form-label">Logradouro</label>
                    <input type="text" class="form-control" required name="logradouro" id="inputLogradouro" placeholder="Logradouro">
                    </div>
                    <div class="col-sm-12 col-md-6">
                    <label for="logradouro" class="form-label">complemento</label>
                    <input type="text" class="form-control" required name="complemento" id="inputcomplemento" placeholder="complemento">
                    </div>
                </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-primary" >Cadastrar</button>
                    
                </div>
                </div>
</form>
            </div>
        </div>
    <!-- FIM. ERRO -->
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
    <!--  FIM MODAIS -->
    <!-- OFFCANVAS-->
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