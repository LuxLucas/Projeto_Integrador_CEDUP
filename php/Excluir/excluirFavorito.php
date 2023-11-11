<?php
session_start();
$usu = $_SESSION['id'];
$prod = $_POST['id'];

include "../conexao.php";

$comando = "delete from favoritos  where cod_usu=$usu and cod_prod=$prod";
mysqli_query($conexao,$comando);
echo"<button type='button' id='btnFavorito' class='btn corazonInativo shadow-sm'>
<p class='m-0'>Favoritar <i class='bi bi-bookmark-heart-fill'></i></p>
</button data-iden='.$prod.'>";
?>