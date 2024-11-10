<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include('db.php');
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    
    $stmt = $pdo->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)");
    $stmt->execute([$nome, $email, $senha]);
    
    echo "Usuário registrado com sucesso!";
}
?>
