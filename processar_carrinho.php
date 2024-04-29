<?php
include('conexao.php');
session_start();

$id = $_POST["id"];
$query = "SELECT * FROM produtos WHERE id = ?";
$stmt = $pdo->prepare($query);
$stmt->execute([$id]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);

$quantidadebd = $row['quantidade'];
$name = $row['nome'];
$price = $row['preco'];
$quantity = $_POST["quantity"];

// Verifica se o carrinho existe na sessão
if (!isset($_SESSION["cart"])) {
    $_SESSION["cart"] = array();
}

// Verifica se o produto já está no carrinho
if (!isset($_SESSION["cart"][$id])) {
    
    // Adiciona o produto ao carrinho
    $_SESSION["cart"][$id] = array(
        "id" => $id,
        "name" => $name,
        "price" => $price,
        "quantity" => $quantity,
        "quantitydb" => $quantidadebd
    );
} else {

    // Se a quantidade solicitada for maior do que a disponível, exibe uma mensagem
    if ($quantity + $_SESSION["cart"][$id]["quantity"] > $quantidadebd) {
        header('location: produto.php?id='.$id .'&erro=1');
        exit;
    }

    // Atualiza a quantidade do produto no carrinho
    $_SESSION["cart"][$id]["quantity"] += $quantity;
}

header('location: inc.php');




?>
