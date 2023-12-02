<?php
$id = $_POST['id3'];

include "../conexao.php";
$comando = "update cidade  set status_cidade=0 where id_cidade=$id";
mysqli_query($conexao,$comando);
$comando = "update bairro join cidade set status_bairro=0 and cod_cidade=id_cidade and status_cidade=0";
mysqli_query($conexao,$comando);
header("location:../../endereco");
?>