<?php
session_start();
include "php/comandos.php";
include "php/Buscar.php";
checarLogado();
$id = $_SESSION['id'];
$tipo = $_SESSION['tipo_usu'];
DestruirSalvo();
include "php/conexao.php";

$comando = "select * from usuario where id_usu=$id";
$pesquisa = mysqli_query($conexao,$comando);
$dados = mysqli_fetch_array($pesquisa);

$email = $dados[1];
if($tipo==2)
{
$comando = "select * from vendedor where cod_usu=$id";
}else{
  $comando = "select id_cliente,nome_cliente,cpf_cliente,data_nasc,telefone from cliente where cod_usu=$id";
}
$pesquisa = mysqli_query($conexao,$comando);
$dados = mysqli_fetch_array($pesquisa);

$nome = $dados[1];
$cpf = $dados[2];
$nasc = $dados[3];
$tele = $dados[4];
?>

<!Doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
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
        <nav id="nav-inferior" class="nav nav-underline navbar navbar-expand-sm p-0">
            <div class="container d-none d-lg-flex">
            <div class="navbar-nav w-100 d-flex justify-content-between">
                    <a class="nav-link text-light" href="pesquisa.php?categorias=15&preco=on">PERFUMES</a>
                    <a class="nav-link text-light" href="pesquisa.php?categorias=16&preco=on">CORPO E BANHO</a>
                    <a class="nav-link text-light" href="pesquisa.php?categorias=17&preco=on">MAQUIAGEM</a>
                    <a class="nav-link text-light" href="pesquisa.php?categorias=18&preco=on">CABELO</a>
                    <a class="nav-link text-light" href="pesquisa.php?categorias=19&preco=on">INFANTIL</a>
                    <a class="nav-link text-light" href="pesquisa.php?categorias=20&preco=on">SKINCARE</a>
            </div>
            </div>
        </nav>
    </header>
    <main class="py-4">
        <div class="container mb-5">
          <div>
            <div class="d-md-flex d-inline-block justify-content-between mb-3">
              <h2 class="title my-4">
                Meus Dados
              </h2>
            </div>
              <div class="row p-3 border bg-white rounded-2">
                <div class="col-sm-12 col-lg-7">
                  <div class="mb-3">
                    <label for="nomeProduto" class="form-label">Nome</label>
                    <input type="text" value='<?php echo"$nome" ?>' class="form-control" disabled name="nome" id="nome" placeholder="Nome">
                  </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-2">
                  <div class="mb-3">
                    <label for="cpf" class="form-label">CPF</label>
                    <input type="text" value='<?php echo"$cpf" ?>' class="form-control" disabled name="cpf" id="cpf" placeholder="CPF">
                  </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-2">
                  <div class="mb-3">
                    <label for="nasc" class="form-label">Nascimento</label>
                    <input type="date" class="form-control" value='<?php echo"$nasc" ?>' disabled name="nasc" id="nasc" placeholder="CPF">
                  </div>
                </div>
                <div class="col-12 col-lg-10">
                  <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" value='<?php echo"$email
                    " ?>'  disabled id="email" placeholder="Email">
                  </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-2">
                  <div class="mb-3">
                    <label for="tele" class="form-label">Telefone</label>
                    <input type="text" class="form-control" value='<?php echo"$tele" ?>'  disabled name="telefone" id="tele" placeholder="Telefone">
                  </div>
                </div>
                <div class="d-flex mt-2">
                    <button class='btn btn-sm btn-primary me-3' id='btn_perfil' data-bs-toggle='modal' data-bs-target='#alterar'>
                  <p class='my-auto'>Alterar Dados</p>
                    </button>
                    <a href='meusPedidos'>
                      <div class="d-flex align-items-center">
                          <button class='btn btn-sm btn-primary' id='btn_perfil' data-bs-toggle='modal' data-bs-target='#alterar'>
                        <p class='my-auto'>Meus Pedidos</p>
                          </button>
                      </div>
                    </a>
                </div>
            </div>
            
          </div>
        </div>
    </main>

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
    <!-- FIM. MODAL ALTERAR -->
    <div class="modal fade" data-bs-backdrop="static" id="alterar" tabindex="-1" aria-labelledby="alterarLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h2 class="modal-title fs-4" id="alterarLabel">Alterar Dados</h2>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
              <form action="php/Alterar/alterarDados" method="POST"> 
                <div class="modal-body">
                  <div class="row g-2">
                    <input type='text' id='alterarDados' value='' hidden name='id'>
                      <div class="col-sm-12">
                          <label for="inputNome" class="form-label">Nome</label>
                          <input type="text" class="form-control" name="nomePerfil" id="inputNome" placeholder="Nome">
                      </div>
                      <div class="col-sm-12 col-md-6">
                          <label for="inputCpf" class="form-label">CPF</label>
                          <input type="text" class="form-control" disabled name="cpfPerfil" id="inputCpf" disabled placeholder="CPF">
                      </div>
                      <div class="col-sm-12 col-md-6">
                          <label for="inputNasc" class="form-label">Nascimento</label>
                          <input type="date" class="form-control" name="nascimento" id="inputNasc" disabled placeholder="Nascimento">
                      </div>
                      <div class="col-sm-12">
                          <label for="inputEmail" class="form-label">Email</label>
                          <input type="email" class="form-control" name="emailPerfil" id="inputEmail" placeholder="Email">
                      </div>
                      <div class="col-sm-12 col-md-6">
                          <label for="inputTelefone" class="form-label">Telefone</label>
                          <input type="text" class="form-control" name="telefonePerfil" id="inputTele" placeholder="Telefone">
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
    <script src="js/jquery.mask.js"></script>
    <script src="js/valores.js"></script>
  </body>
</html>