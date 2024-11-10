<?php
// Conexão com o banco de dados
$servername = "sql109.infinityfree.com"; 
$username = "if0_37588405";
$password = "5oIuTC5ISO7sZ";
$dbname = "if0_37588405_cafe";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificando a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Recebendo os dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT); // Criptografando a senha

// Verificando se o email já está cadastrado
$sql = "SELECT * FROM Usuario WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Email já cadastrado. Tente outro.";
} else {
    // Inserindo o novo usuário
    $sql = "INSERT INTO Usuario (nome, email, senha, data_cadastro) VALUES ('$nome', '$email', '$senha', NOW())";

    if ($conn->query($sql) === TRUE) {
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

// Fechando a conexão
$conn->close();
?>
