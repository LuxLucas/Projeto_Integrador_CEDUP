<?php
$id = $_POST['id'];

include "conexao.php";

$comando = "delete from estado where id_est=$id";
mysqli_query($conexao,$comando);
header("location:../estado.php");
?>