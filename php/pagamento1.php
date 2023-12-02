<?php
session_start();
$_SESSION['end'] = $_GET['end'];
header("location:../pagamento");
?>