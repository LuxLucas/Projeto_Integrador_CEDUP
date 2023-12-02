<?php
$id = $_POST['id'];

include "../conexao.php";

$comando = "UPDATE categoria set status_categ=0 where id_categ=$id;";
mysqli_query($conexao,$comando);
$comando = "UPDATE produto set status_prod=0 where cod_categ=$id;";
mysqli_query($conexao,$comando);
header("location:../../categoria");
?>