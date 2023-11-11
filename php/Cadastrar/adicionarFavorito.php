<?php
session_start();
$usu = $_SESSION['id'];
$prod = $_POST['id'];

include "../conexao.php";

$comando = "insert into favoritos(cod_usu,cod_prod) values ($usu,$prod)";
mysqli_query($conexao,$comando);
echo $comando;
?>