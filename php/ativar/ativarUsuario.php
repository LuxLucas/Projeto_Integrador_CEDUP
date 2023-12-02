<?php
$id = $_POST['id'];

include "../conexao.php";

$comando = "UPDATE usuario set status_usu=1 where id_usu=$id;";
mysqli_query($conexao,$comando);
header("location:../../funcionario");
?>