<?php
$id = $_POST['id'];

include "conexao.php";

$comando = "delete from distribuidora where id_distri=$id";
mysqli_query($conexao,$comando);
header("location:../distribuidora.php");
?>