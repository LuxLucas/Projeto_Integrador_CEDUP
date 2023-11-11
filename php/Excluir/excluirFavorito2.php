<?php
session_start();
$usu = $_SESSION['id'];
$prod = $_GET['id'];

include "../conexao.php";

$comando = "delete from favoritos  where cod_usu=$usu and cod_prod=$prod";
mysqli_query($conexao,$comando);
header("location:../../favorito.php");
?>