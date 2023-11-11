<?php
function NavLogado()
{
if(isset($_SESSION['logado']))
{
echo "<div class='navbar-nav align-itens-center'>
<a href='favorito.php?id=".$_SESSION['id']."' class='nav-link'><span class='span-link'>Favoritos</span><i class='bi bi-suit-heart-fill'></i></a>
<a href='carrinho.php?id=".$_SESSION['id']."' class='nav-link'><span class='span-link'>Bolsinha</span><i class='bi bi-handbag-fill'></i></a>
<div class='dropdown'>";
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
        <li><a href='perfil.php?id=".$_SESSION['id']."' class='link-drop'><button class='dropdown-item' type='button'>Conta</button></a></li>
            <li><a href='php/logout.php' class='link-drop'><button class='dropdown-item' type='button'>Sair</button></a></li>
        </ul>";
    }if(isset($_SESSION['tipo_usu']) && $_SESSION['tipo_usu'] == 2){
        echo
        "<button class='dropdown-toggle drop-menu nav-link' type='button' data-bs-toggle='dropdown' aria-expanded='false'>
            <strong>Minha Conta</strong> 
        </button>
        <ul class='dropdown-menu'>
        <li><a href='perfil.php?id=".$_SESSION['id']."' class='link-drop'><button class='dropdown-item' type='button'>Conta</button></a></li>
            <li><a href='administrar.php' class='link-drop'><button class='dropdown-item' type='button'>Administração</button></a></li>
            <li><a href='php/logout.php' class='link-drop'><button class='dropdown-item' type='button'>Sair</button></a></li>
        </ul>";
    }
    
}

function VerificarErro()
{
    if(!isset($_SESSION['erro']))
    {
        echo "0";
    }else
    {
     $erro = $_SESSION['erro'];
     echo $erro;
     $_SESSION['erro'] = 0;
    }
}
//rafael-neri
function validaCPF($cpf) {
 
    // Extrai somente os números
    $cpf = preg_replace( '/[^0-9]/is', '', $cpf );
     
    // Verifica se foi informado todos os digitos corretamente
    if (strlen($cpf) != 11) {
        return false;
    }

    // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
    if (preg_match('/(\d)\1{10}/', $cpf)) {
        return false;
    }

    // Faz o calculo para validar o CPF
    for ($t = 9; $t < 11; $t++) {
        for ($d = 0, $c = 0; $c < $t; $c++) {
            $d += $cpf[$c] * (($t + 1) - $c);
        }
        $d = ((10 * $d) % 11) % 10;
        if ($cpf[$c] != $d) {
            return false;
        }
    }
    return true;
}
?>