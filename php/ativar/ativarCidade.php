<?php
$id = $_POST['id3'];

include "../conexao.php";

$comando = "UPDATE cidade set status_cidade=1 where id_cidade=$id;";
mysqli_query($conexao,$comando);
header("location:../../endereco");
?>