<?php
$host = 'sql109.infinityfree.com';
$dbname = 'if0_37588405_cafe';
$user = 'if0_37588405';  
$password = '5oIuTC5ISO7sZ';  

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
    die();
}
?>
