<?php
session_start();
$codigo = $_POST['codigo'];
$desconto = $_POST['desconto'];
include "../conexao.php";
$comando = "select * from cupom where nome_cupom='$codigo'";
$pesquisa = mysqli_query($conexao,$comando);
$resultados = mysqli_num_rows($pesquisa);
if($resultados>0)
{
    $_SESSION['erro'] = 5;
    header("location:../../cupom.php");
}else
{
    $comando = "insert into cupom(nome_cupom,valor_desconto) values ('$codigo',$desconto)";
    if(mysqli_query($conexao,$comando)==true)
    {
    header("location:../../cupom.php");
    }else
    {
        $_SESSION['erro'] = 3;
        header("location:../../cupom.php");
    }
}
?>