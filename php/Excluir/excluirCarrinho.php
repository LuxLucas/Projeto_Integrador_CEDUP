<?php
session_start();
$id = $_POST['id'];
$usu = $_SESSION['id'];
include "../conexao.php";

$comando = "delete from itens_venda where id_itens=$id";
mysqli_query($conexao,$comando);
header("location:../../carrinho.php?id=$usu");
?>