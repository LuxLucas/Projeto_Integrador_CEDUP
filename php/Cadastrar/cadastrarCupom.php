<?php
session_start();
$codigo = trim($_POST['codigo']);
$desconto = trim($_POST['desconto']);
$_SESSION['nome_cupom'] = trim($_POST['codigo']);
$_SESSION['descon'] = trim($_POST['desconto']);
include "../conexao.php";
$comando = "select * from cupom where nome_cupom='$codigo'";
$pesquisa = mysqli_query($conexao,$comando);
$resultados = mysqli_num_rows($pesquisa);
if($resultados>0)
{
    $_SESSION['erro'] = 5;
    header("location:../../cupom");
}else
{
    $comando = "insert into cupom(nome_cupom,valor_desconto,status_cupom) values ('$codigo',$desconto,1)";
    if(mysqli_query($conexao,$comando)==true)
    {
    header("location:../../cupom");
    }else
    {
        $_SESSION['erro'] = 3;
        header("location:../../cupom");
    }
}
?>