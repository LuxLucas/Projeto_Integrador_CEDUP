<?php
session_start();
$bairro = $_POST['bairro'];
$complemento =trim($_POST['complemento']);
$logradouro = trim($_POST['logradouro']);
$usu = $_SESSION['id'];
include "../conexao.php";


$comando = "insert into logradouro(nome_logradouro,complemento,cod_bairro,cod_usu) values ('$logradouro','$complemento',$bairro,$usu)";
mysqli_query($conexao,$comando);

header("location:../../carrinho_endereco.php");
?>