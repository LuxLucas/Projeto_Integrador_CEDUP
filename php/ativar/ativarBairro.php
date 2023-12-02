<?php
$id = $_POST['id4'];

include "../conexao.php";

$comando = "UPDATE bairro set status_bairro=1 where id_bairro=$id;";
mysqli_query($conexao,$comando);
header("location:../../endereco");
?>