<?php
$id = $_POST['id'];

include "../conexao.php";

$comando = "UPDATE distribuidora set status_distri=0 where id_distri=$id;";
mysqli_query($conexao,$comando);
$comando = "UPDATE produto set status_prod=0 where cod_distri=$id;";
mysqli_query($conexao,$comando);
header("location:../../distribuidor");
?>