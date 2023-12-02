<?php
$id = $_POST['id2'];

include "../conexao.php";

$comando = "UPDATE estado set status_est=1 where id_est=$id;";
mysqli_query($conexao,$comando);
header("location:../../endereco");
?>