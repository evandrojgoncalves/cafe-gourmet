<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $produto_id = $_POST['produto_id'];
    
    if (!isset($_SESSION['carrinho'])) {
        $_SESSION['carrinho'] = [];
    }
    
    if (!in_array($produto_id, $_SESSION['carrinho'])) {
        $_SESSION['carrinho'][] = $produto_id;
    }
}

$items_in_cart = count($_SESSION['carrinho']);
echo "Carrinho ($items_in_cart itens)";
?>
