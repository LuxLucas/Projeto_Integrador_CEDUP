<?php
session_start();
$id = $_POST['id'];
$nome = $_POST['nome'];
$sigla = $_POST['sigla'];
$pais = $_POST['pais'];
include "../conexao.php";
if(mysqli_query($conexao, $comando)==true)
{
header("location:../../estado.php");
}else{
    $_SESSION['erro'] = 2;
    header("location:../../estado.php");
}
?>