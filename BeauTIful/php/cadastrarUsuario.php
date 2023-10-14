<?php
session_start();
$Nome = $_POST['nome'];
$Cpf = $_POST['cpf'];
$Sexo = $_POST['sexo'];
$Tipo = $_SESSION['tipo'];
$Email = $_POST['email'];
$Senha = $_POST['senha'];
$Nascimento = $_POST['nascimento'];
$Telefone = $_POST['telefone'];

$comando = "select * from usuario where email='$Email'";
$pesquisa1 = mysqli_query($comando);
$resultados1 = mysqli_num_rows($pesquisa1);

$comando = "select * from cliente where cpf_cliente='$Cpf'";
$pesquisa2 = mysqli_query($comando);
$resultados2 = mysqli_num_rows($pesquisa2);

if($resultados1>0 || $resultados2>0)
{
    header("location:../cadastro.php");
}else
{
    
}
?>