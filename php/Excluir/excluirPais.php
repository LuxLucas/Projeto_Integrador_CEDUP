<?php
$id = $_POST['id'];

include "conexao.php";

$comando = "delete from pais where id_pais=$id";
mysqli_query($conexao,$comando);
header("location:../pais.php");
?>