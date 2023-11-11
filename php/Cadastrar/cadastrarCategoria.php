<?php
session_start();
$nome = $_POST['nome'];
include "../conexao.php";
$comando = "select * from categoria where nome_categ='$nome'";
$pesquisa = mysqli_query($conexao,$comando);
$resultados = mysqli_num_rows($pesquisa);
if($resultados>0)
{
    $_SESSION['erro'] = 4;
    header("location:../../categoria.php");
}else
{
    $comando = "insert into categoria(nome_categ) values ('$nome')";
    if(mysqli_query($conexao,$comando)==true)
    {
    header("location:../../categoria.php");
    }else
    {
        $_SESSION['erro'] = 3;
        header("location:../../categoria.php");
    }
}
?>