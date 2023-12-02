<?php
$id = $_POST['id'];

include "../conexao.php";

$comando = "UPDATE produto set status_prod=1 where id_prod=$id;";
mysqli_query($conexao,$comando);
header("location:../../produto");
?>