<?php
$id = $_POST['id'];

include "../conexao.php";

$comando = "UPDATE distribuidora set status_distri=1 where id_distri=$id;";
mysqli_query($conexao,$comando);
header("location:../../distribuidor");
?>