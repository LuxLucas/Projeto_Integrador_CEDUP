<?php
session_start();
$id = $_POST['id'];
$nome = $_POST['nome'];
$tele = $_POST['tele'];
include "../conexao.php";

$comando= "update vendedor set nome_vendedor='$nome',telefone='$tele' where id_vendedor=$id";
if(mysqli_query($conexao, $comando)==true)
{
header("location:../../funcionario.php");
}else{
    $_SESSION['erro'] = 2;
    header("location:../../funcionario.php");
}
?>