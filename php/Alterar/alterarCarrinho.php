<?php
session_start();
$usu = $_SESSION['id'];
$id = $_POST['id'];
$sinal = $_POST['sinal'];
include "../conexao.php";
$comando = "select  a.quantidade_prod,b.quantidade_vendida,a.preco_prod from produto as a join itens_venda as b where a.id_prod = b.cod_prod and b.id_itens=$id";
$pesquisa = mysqli_query($conexao, $comando);
$dados = mysqli_fetch_array($pesquisa);
$max = $dados[0];

if ($sinal == 1) {
    $quant = $dados[1] + 1;
} else {
    $quant = $dados[1] - 1;
}

$preco = $dados[2];
$total = $quant * $preco;

if ($quant > $max || $quant <= 0) {
    echo "12";
    exit();
} else {
    $comando = "update itens_venda set quantidade_vendida=$quant,preco_total=$total where id_itens=$id";
    $pesquisa = mysqli_query($conexao, $comando);
    echo "sucesso";
}
