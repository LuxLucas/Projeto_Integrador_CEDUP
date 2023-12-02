<?php
session_start();
$fil = $_POST['filtro'];
$_SESSION['filtro'] = $fil;
header("location:../index");
?>
