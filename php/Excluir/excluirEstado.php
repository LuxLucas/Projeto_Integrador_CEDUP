<?php
$id = $_POST['id2'];

include "../conexao.php";

$comando = "update estado  set status_est=0 where id_est=$id ";
mysqli_query($conexao,$comando);
$comando = "update cidade join estado set status_cidade=0 where cod_estado=id_est and status_est=0";
mysqli_query($conexao,$comando);
$comando = "update bairro join cidade set status_bairro=0 and cod_cidade=id_cidade and status_cidade=0";
mysqli_query($conexao,$comando);
header("location:../../endereco");
?>