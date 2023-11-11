<?php
$id = $_POST['id'];

include "conexao.php";

$comando = "delete from produto where id_prod=$id";
mysqli_query($conexao,$comando);
header("location:../produto.php");
?>