<?php
$id = $_POST['id'];

include "../conexao.php";

$comando = "UPDATE categoria set status_categ=1 where id_categ=$id;";
mysqli_query($conexao,$comando);
header("location:../../categoria");
?>