<?php
session_start();
$fil = $_POST['filtro'];
$_SESSION['filtro'] = $fil;
$pes = $_SESSION['ultima_pesquisa'];
header("location:../pesquisa?pesquisa=$pes");
?>
