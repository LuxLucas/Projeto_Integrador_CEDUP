<?php
$id = $_POST['id'];

include "conexao.php";

$comando = "delete from cupom where id_cupom=$id";
mysqli_query($conexao,$comando);
header("location:../cupom.php");
?>