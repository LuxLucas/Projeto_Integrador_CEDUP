<?php
$id = $_POST['id1'];

include "../conexao.php";

$comando = "UPDATE pais set status_pais=1 where id_pais=$id;";
mysqli_query($conexao,$comando);
header("location:../../endereco");
?>