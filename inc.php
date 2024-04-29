

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="assets/css/carrinho.css">
<head>
    <meta charset="UTF-8">
    <title>Carrinho</title>
</head>
<body>
    <h1>Carrinho de compras</h1>
    <table>
        <thead>
            <tr>
                <th class="prod">Produto</th>
                <th>Preço</th>
                <th>Quantidade</th>
                <th>Valor Total</th>
                <th class="act">Opções</th>
            </tr>
        </thead>
        <tbody>
<?php
session_start();
?>
            <?php
            $total = 0;
            if (isset($_SESSION["cart"]) && count($_SESSION["cart"]) > 0) {
                foreach ($_SESSION["cart"] as $id => $product) {
                    echo "<tr>";
                    echo "<td>" . $product["name"] . "</td>";
                    echo "<td>" . $product["price"] . "€</td>";
                    echo "<td>" . $product["quantity"] . "</td>";
                    echo "<td>" . ($product["price"] * $product["quantity"]) . "€</td>";
                    echo "<td><form action='remove_from_cart.php' method='post'><input type='hidden' name='id' value='" . $id . "'><button type='submit'>Remove</button></form></td>";
                    echo "</tr>";
                    $total += $product["price"] * $product["quantity"];
                }
            } else {
                echo "<tr><td colspan='5'>O carrinho está vazio</td></tr>";
            }
            ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="1"></td>
                <td colspan="1" ><button class="checkout"><a href="">Concluir Pagamento</a></button></td>
                <td colspan="1"></td>
                <td>Total: <?php echo $total; ?>€</td>
                <td ><button class="shop"><a href="lista.php">Continuar Compras</a></button></td>
            </tr>
        </tfoot>
    </table>
</body>
</html>