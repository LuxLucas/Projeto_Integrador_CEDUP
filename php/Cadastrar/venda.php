<?php
session_start();
$id = $_SESSION['id'];
$endereco = $_SESSION['end'];
include "../conexao.php";

$comando = "select id_venda from vendas where cod_usu=$id and status_venda=0";
$pesquisa=mysqli_query($conexao,$comando);
$dados = mysqli_fetch_array($pesquisa);
$compra = $dados[0];
$comando = "select SUM(a.preco_total) as preco from itens_venda as a join vendas as b
where a.cod_venda=b.id_venda and b.id_venda=$compra";
$pesquisa=mysqli_query($conexao,$comando);
$dados = mysqli_fetch_array($pesquisa);
$total = $dados[0];
$dia = date("Y-m-d");
$comando = "update vendas set status_venda=1,data_venda='$dia',cod_end=$endereco,total_venda=$total where id_venda=$compra";
mysqli_query($conexao,$comando);
header("location:../../view_entrega?id=$compra");
?>