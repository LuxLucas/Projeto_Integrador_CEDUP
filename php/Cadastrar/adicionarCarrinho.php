<?php
session_start();
$usu = $_SESSION['id'];
$quant = $_POST['quant'];
$prod = $_POST['id'];
$total= $_POST['preco'];

include "../conexao.php";

$comando = "select * from vendas where cod_usu=$usu and status_venda=0";

$pesquisa = mysqli_query($conexao,$comando);
$resultados = mysqli_num_rows($pesquisa);

if($resultados == 0){
$comando = "insert into vendas(data_venda,total_venda,cod_usu,status_venda) values (0000-00-00,0,$usu,0)";
mysqli_query($conexao,$comando);
}

$comando = "select * from vendas where cod_usu=$usu and status_venda=0";
$pesquisa = mysqli_query($conexao,$comando);
$resultados = mysqli_num_rows($pesquisa);
$dados = mysqli_fetch_array($pesquisa);
$venda = $dados[0];
$comando = "select * from itens_venda where cod_venda=$venda and cod_prod=$prod";
$pesquisa = mysqli_query($conexao,$comando);
$resultados = mysqli_num_rows($pesquisa);
if($resultados==0)
{
$comando = "insert into itens_venda(cod_prod,quantidade_vendida,cod_venda,preco_total) values ($prod,$quant,$venda,$total)";
mysqli_query($conexao,$comando);
echo"registrado";
}else{
    echo"atualizado";
}
?>