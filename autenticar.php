<?php
session_start(); // Inicia uma sessão para armazenar dados do usuário

// Obtém os dados do formulário
$email = $_POST['email'];
$senha = $_POST['senha'];

// Validação do login
if (isset($usuarios[$email]) && $usuarios[$email] === $senha) {
    // Se o login for válido, armazena os dados do usuário na sessão
    $_SESSION['usuario'] = $email;
    
    // Redireciona o usuário para a página inicial com uma mensagem de sucesso
    header("Location: index.html?login=sucesso");
    exit;
} else {
    // Se o login falhar, redireciona de volta para o login com uma mensagem de erro
    header("Location: login.html?erro=1");
    exit;
}
?>
