<?php
session_start();
include "php/comandos.php";
include "php/Buscar.php";
include "php/Selects.php";
include"php/conexao.php";
checarLogado();
DestruirSalvo();
$id = $_SESSION['id'];
$comando = "select id_venda from vendas where cod_usu=$id and status_venda=0";
$pesquisa = mysqli_query($conexao,$comando);
$existe = mysqli_num_rows($pesquisa);
if($existe==0)
{
    header("location:index");
}
$dados = mysqli_fetch_array($pesquisa);
$venda = $dados[0];
$comando = "select * from uso_cupom where cod_venda=$venda";
$pesquisa = mysqli_query($conexao,$comando);
$existe = mysqli_num_rows($pesquisa);
if($existe!=0)
{
$comando = "select SUM(a.quantidade_vendida) as quantidades,SUM(a.preco_total) as Totais,d.valor_desconto,d.nome_cupom
        from itens_venda as a join vendas as b join uso_cupom as c join cupom as d
        where a.cod_venda=b.id_venda and b.id_venda=$venda and c.cod_venda=b.id_venda and c.cod_cupom=d.id_cupom";
        $pesquisa = mysqli_query($conexao,$comando);
        $dados = mysqli_fetch_array($pesquisa);
        $desconto = ($dados[1]*0.01)*$dados[2];
        $total = $dados[1];
        $totaldesconto = $total-$desconto;
}else
{
    $comando = "select SUM(a.quantidade_vendida) as quantidade,SUM(a.preco_total) from itens_venda as a 
    where cod_venda=$venda";
    $pesquisa = mysqli_query($conexao,$comando);
        $dados = mysqli_fetch_array($pesquisa);
        $desconto = 0;
        $total = $dados[1];
        $totaldesconto = $total-$desconto;
}
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
    <main class="py-5">
        <div class="container p-lg-5">
            
            <div class="row g-3 justify-content-center mb-5">
                    <div class="text-center my-3">
                        <h1 class="title">Pagamento</h1>
                    </div>
                <div class="col-lg-7">
                    <div class="border bg-white rounded-3 p-3 p-md-4">
                        <div class="row g-3">
                            <div class="col-12 col-md-7 col-lg-8 mb-2 mb-md-3">
                                <label for="formaPag">Forma de pagamento</label>
                                <select name="formaPag" id="formaPag" CLASS="form-select w-75">
                                    <option value="0">Boleto bancário</option>
                                    <option value="1" selected>Cartão bancário</option>
                                    <option value="2">PIX</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6">
                                <label for="nomeCartao">Nome do cartão</label>
                                <input type="text" class="form-control" placeholder="Nome do cartão">
                            </div>
                            <div class="col-12 col-md-6 col-lg-6">
                                <label for="numCartao">Número do cartão</label>
                                <input type="text" class="form-control" placeholder="Número do cartão">
                            </div>
                            <div class="col-12 col-md-3 col-lg-3">
                                <label for="expCartao">Expiração</label>
                                <input type="text" class="form-control" placeholder="Expiração">
                            </div>
                            <div class="col-12 col-md-3 col-lg-3 mb-2 mb-md-3">
                                <label for="cvvCartao">CVV</label>
                                <input type="text" class="form-control" placeholder="CVV">
                            </div>
                            <div class="col-12 col-md-12 col-lg-12 mt-2 mt-4">
                                <form action='php/Cadastrar/venda' method='POST'>
                                <button type="submit" class="btn btn-primary py-2 px-3">
                                    <strong>
                                        <p class="m-0">Finalizar compra</p>
                                    </strong>
                                </button>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="row g-3">
                        <div class="col-12 border bg-white rounded-3 p-3">
                            <div class="mb-4">
                                <h2 class="title text-center">Métodos de pagamento</h2>
                                <p class="m-0 text-center">Aceitamos as seguinte modalidades:</p>
                            </div>
                            <div class="row row-cols-3">
                            <div class="col">
                                    <img src="imagens/boleto-simbolo-nbg_h318.png" alt="Logo Boleto" class="img-fluid rounded-2 border">
                                </div>
                                <div class="col">
                                    <img src="imagens/logoPagBank.png" alt="Logo PagBank" class="img-fluid rounded-2">
                                </div>
                                <div class="col">
                                    <img src="imagens/PIX-nbg_h318.png" alt="Logo PIX" class="img-fluid rounded-2 border">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 border bg-white rounded-3 p-3">
                            <div class="mb-4">
                                <h2 class="title text-center">Informações de compra</h2>
                                <p class="m-0 text-center">Aceitamos as seguinte modalidades:</p>
                            </div>
                            <div class="row text-center">
                                <p>Desconto:R$-<?php echo $desconto?></p>
                                <p>Subtotal:R$<?php echo $total?></p>
                                <p>Total:R$<?php echo $totaldesconto?></p>
                            </div>
                        </div>
                    </div>
                </div>
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
    <script src="js/jquery.mask.js"></script>
    <script src="js/valores.js"></script>
  </body>
</html>