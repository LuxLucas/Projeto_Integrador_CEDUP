<?php
session_start();
$id = $_POST['id'];
$codigo = $_POST['codigo'];
$desconto = $_POST['desconto'];
include "conexao.php";
$comando = "select * from cupom where nome_cupom='$codigo'";
$pesquisa = mysqli_query($conexao,$comando);
$resultados = mysqli_num_rows($pesquisa);
if($resultados>0)
{
    header("location:../cupom.php");
    $_SESSION['erro'] = 5;
}else
{
    $comando = "update cupom set nome_cupom='$codigo',valor_desconto=$desconto where id_cupom=$id";
    if(mysqli_query($conexao, $comando)==true)
    {
    header("location:../../cupom.php");
    }else{
        $_SESSION['erro'] = 2;
        header("location:../../cupom.php");
    }
}
?>