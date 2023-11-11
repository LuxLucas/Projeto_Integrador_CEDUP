<?php
session_start();
$id = $_POST['id'];
$nome = $_POST['nome'];
include "../conexao.php";
$comando = "select * from pais where nome_pais='$nome'";
$pesquisa = mysqli_query($conexao,$comando);
$resultados = mysqli_num_rows($pesquisa);
if($resultados>0)
{
    $_SESSION['erro'] = 8;
    header("location:../../pais.php");
}else
{
    $comando = "update pais set nome_pais='$nome' where id_pais=$id";
    if(mysqli_query($conexao, $comando)==true)
    {
    header("location:../../pais.php");
    }else{
        $_SESSION['erro'] = 2;
        header("location:../../pais.php");
    }
}
?>