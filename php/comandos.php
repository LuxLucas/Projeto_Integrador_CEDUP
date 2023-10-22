<?php
function NavLogado()
{
if(isset($_SESSION['logado']))
{
echo'<div class="navbar-nav align-itens-center">';
echo'<a href="#" class="nav-link"><span class="span-link">Favoritos</span><i class="bi bi-suit-heart-fill"></i></a>';
echo'<a href="#" class="nav-link"><span class="span-link">Bolsinha</span><i class="bi bi-handbag-fill"></i></a>';
echo'<div class="dropdown">';
        dropLogado();
echo'</div>
    </div>';
}else{
    echo'<div class="navbar-nav">';
    echo'<a href="login.php" class="nav-link">Login</a>';
    echo'<a href="cadastro.php" class="nav-link"><strong>Cadastra-se</strong></a>';
    echo'</div>';
}
}

function dropLogado(){
    if(isset($_SESSION['tipo_usu']) && $_SESSION['tipo_usu'] == 1){
        echo
        "<button class='dropdown-toggle drop-menu nav-link' type='button' data-bs-toggle='dropdown' aria-expanded='false'>
            <strong>Minha Conta</strong> 
        </button>
        <ul class='dropdown-menu'>
            <li><a href='#' class='link-drop'><button class='dropdown-item' type='button'>Conta</button></a></li>
            <li><a href='php/logout.php' class='link-drop'><button class='dropdown-item' type='button'>Sair</button></a></li>
        </ul>";
    }if(isset($_SESSION['tipo_usu']) && $_SESSION['tipo_usu'] == 2){
        echo
        "<button class='dropdown-toggle drop-menu nav-link' type='button' data-bs-toggle='dropdown' aria-expanded='false'>
            <strong>Minha Conta</strong> 
        </button>
        <ul class='dropdown-menu'>
            <li><a href='#' class='link-drop'><button class='dropdown-item' type='button'>Conta</button></a></li>
            <li><a href='administrar.php' class='link-drop'><button class='dropdown-item' type='button'>Administração</button></a></li>
            <li><a href='php/logout.php' class='link-drop'><button class='dropdown-item' type='button'>Sair</button></a></li>
        </ul>";
    }
    
}
?>