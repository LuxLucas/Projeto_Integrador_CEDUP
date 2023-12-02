<?php
$id = $_POST['id4'];

include "../conexao.php";
$comando = "update bairro join cidade set status_bairro=0 where id_bairro=$id";
mysqli_query($conexao,$comando);
header("location:../../endereco");
?>