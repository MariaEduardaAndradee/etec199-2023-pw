<?php

session_start();

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

// Verificar se usuário e senha estão corretos
if ($usuario == 'admin' && $senha == 'senha123') {
    // Se a validação estiver correta, criar um token e redirecionar
    $token = '#bb412abc';
    $_SESSION['token'] = $token;
    header('Location: principal.php');
} else {
    // Se a validação estiver incorreta, redirecionar para página de erro
    header('Location: erro_login.php');
}

echo $usuario, '<br>';
echo $senha;



?>
