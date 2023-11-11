<?php
$id = $_POST['id'];
include "../conexao.php";

$comando = "delete from categoria where id_categ=$id";
mysqli_query($conexao,$comando);
header("location:../../categoria.php");
?>