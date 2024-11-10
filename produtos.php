<?php
include('db.php');

$stmt = $pdo->prepare("SELECT * FROM produtos");
$stmt->execute();
$produtos = $stmt->fetchAll();

foreach ($produtos as $produto) {
    echo '<div class="product">';
    echo '<img src="' . $produto['imagem'] . '" alt="' . $produto['nome'] . '">';
    echo '<h3>' . $produto['nome'] . '</h3>';
    echo '<p>' . $produto['descricao'] . '</p>';
    echo '<p>R$ ' . $produto['preco'] . '</p>';
    echo '<button>Adicionar ao Carrinho</button>';
    echo '</div>';
}
?>
