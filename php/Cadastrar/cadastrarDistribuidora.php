<?php
session_start();
$nome = $_POST['nome'];
$cnpj = $_POST['cnpj'];
$fantasia = $_POST['fantasia'];
include "../conexao.php";
$comando = "select * from distribuidora where cnpj='$cnpj'";
$pesquisa = mysqli_query($conexao,$comando);
$resultados = mysqli_num_rows($pesquisa);
if($resultados>0)
{
    $_SESSION['erro'] = 8;
    header("location:../../distribuidor.php");
}else
{
    $comando = "insert into distribuidora(nome_distri,cnpj,nome_fantasia) values ('$nome','$cnpj','$fantasia')";
    if(mysqli_query($conexao,$comando)==true)
    {
    header("location:../../distribuidor.php");
    }else
    {
        $_SESSION['erro'] = 3;
        header("location:../../distribuidor.php");
    }
}
?>