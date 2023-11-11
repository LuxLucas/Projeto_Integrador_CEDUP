<?php
session_start();
include "php/comandos.php";
include "php/Buscar.php";
include "php/Selects.php";
include "php/conexao.php";
$prod = $_GET['prod'];
$valores = [];
for($i=1;$i<13;$i++)
{
$salario = 0;
$comando = "select SUM(a.preco_total) as preco from itens_venda as a  join vendas as b join produto as c where a.cod_venda=b.id_venda and a.cod_prod=c.id_prod and MONTH(b.data_venda)=$i and a.cod_prod=$prod";
$pesquisa = mysqli_query($conexao,$comando);
$dados = mysqli_fetch_array($pesquisa);
$salario += $dados[0];
array_push($valores,$salario);
}
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
    <div class="container">
        <div class="mt-3 mb-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php" class="text-primary">Home</a></li>
                    <li class="breadcrumb-item"><a href="administrar.php" class="text-primary">Administração</a></li>
                    <li class="breadcrumb-item"><a href="relatorio.php" class="text-primary">Relatórios</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Lucros</li>
                </ol>
            </nav>
        </div>
    <?php echo"
<script>
window.onload = function () {

var chart = new CanvasJS.Chart('chartContainer', {
	animationEnabled: true,
	theme: 'light2',
	title:{
		text: 'Relatório de Lucro'
	},
	axisY: {
		title: 'Lucro(R$)'
	},
	data: [{        
		ype: 'column',  
		showInLegend: true, 
		legendMarkerColor: 'grey',
		legendText: 'Lucro obtido',
		dataPoints: [      
			{ y: ".$valores[0].", label: 'Janeiro' },
			{ y: ".$valores[1].",  label: 'Feveiro' },
			{ y: ".$valores[2].",  label: 'Março' },
			{ y: ".$valores[3].",  label: 'Abril' },
			{ y: ".$valores[4].",  label: 'Maio' },
			{ y: ".$valores[5].", label: 'Junho' },
			{ y: ".$valores[6].",  label: 'Julho' },
			{ y:".$valores[7].",  label: 'Agosto' },
          { y: ".$valores[8].",  label: 'Setembro' },
          { y: ".$valores[9].",  label: 'Outubro' },
          { y: ".$valores[10].",  label: 'Novembro' },
          { y: ".$valores[11].",  label: 'Dezembro' }
		]
	}]
});
chart.render();

}
</script>
</head>
<body>
<div id='chartContainer' style='height: 370px; width: 100%;'></div>
<script src='https://cdn.canvasjs.com/canvasjs.min.js'></script>";?>
<h2 class="mt-4 title">
            Dados do Produto
        </h2>
        <hr>
        <div class="row mt-4">
            
                    
                    <div class="col-md-10 col-lg-6 mb-3">
                        <label for="nomeProduto">Nome do Produto</label>
                        <input type="text" class="form-control form-control-sm" name="nomeProduto" id="nomeProduto" disabled readonly>
                    </div>
                    <div class="col-6 col-md-3 col-lg-2 mb-3">
                            <label for="idProduto">ID do Produto</label>
                            <input type="text" class="form-control form-control-sm" name="idProduto" id="idProduto" disabled readonly>
                    </div>
                    <div class="col-6 col-md-3 col-lg-2 mb-3">
                        <label for="qtdProduto">Quant. Produto</label>
                        <input type="text" class="form-control form-control-sm" name="qtdProduto" id="qtdProduto" disabled readonly>
                    </div>
                    <div class="col-md-2 d-none d-lg-flex"></div>
                    <div class="col-6 col-lg-2 col-md-3 mb-3">
                        <label for="precoProduto">Preço Venda</label>
                        <input type="text" class="form-control form-control-sm" name="precoProduto" id="precoProduto" disabled readonly>
                    </div>
                    <div class="col-6 col-lg-2 col-md-3 mb-3">
                        <label for="precoProduto">Preço Base</label>
                        <input type="text" class="form-control form-control-sm" name="precoProduto" id="precoProduto" disabled readonly>
                    </div>
                    <div class="col-md-10 col-lg-6 mb-3">
                        <label for="distProduto">Distribuidor</label>
                        <input type="text" class="form-control form-control-sm" name="distProduto" id="distProduto" disabled readonly>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-3">
                        <label for="categProduto">Categoria Produto</label>
                        <input type="text" class="form-control form-control-sm" name="categProduto" id="categProduto" disabled readonly>
                    </div>
                    <div class="col-lg-6 d-flex-none d-lg-flex">
                    </div>
                    <div class="col-12 col-lg-8 mb-3">
                        <label for="descProduto">Descrição Produto</label>
                        <textarea type="text" class="form-control form-control-sm" name="descProduto" id="descProduto" disabled readonly></textarea>
                    </div>
            </div>
            <hr>
                <div class="mb-4">
                    <button type="button" id="imprimir" name="imprimirLucro" class="btn btn-primary">
                        <p class="my-auto">Imprimir <i class="bi bi-filetype-pdf"></i></p>
                    </button>
                </div>
        </div>
</body>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <script src="js/valores.js"></script>
    <script src="js/dataTable.js"></script>
    <script src="js/jquery.mask.js"></script>
</html>