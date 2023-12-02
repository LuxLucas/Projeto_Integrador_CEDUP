<?php
$id = $_POST['id'];

include "../conexao.php";

$comando = "UPDATE cupom set status_cupom=1 where id_cupom=$id;";
mysqli_query($conexao,$comando);
header("location:../../cupom");
?>