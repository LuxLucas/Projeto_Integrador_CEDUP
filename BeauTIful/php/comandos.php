<?php
function NavLogado()
{
if(isset($_SESSION['logado']))
{
echo'<div class="navbar-nav">';
echo'<a href="#" class="nav-link"><strong>Minha Conta</strong></a>';
echo'<a href="#" class="nav-link"><span class="span-link">Favoritos</span><i class="bi bi-suit-heart-fill"></i></a>';
echo'<a href="#" class="nav-link"><span class="span-link">Bolsinha</span><i class="bi bi-handbag-fill"></i></a>';
echo'</div>';
}else{
    echo'<div class="navbar-nav">';
    echo'<a href="login.php" class="nav-link">Login</a>';
    echo'<a href="cadastro.php" class="nav-link"><strong>Cadastra-se</strong></a>';
    echo'</div>';
}
}
?>