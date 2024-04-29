<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('conexao.php');
    $query = "SELECT * FROM produtos";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/lista.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="assets/img/shop.png" type="image/x-icon">
    <title>TekSell</title>
</head>

<body>
   <div class="main"><!--conteudo principal-->


   <?php
        session_start();

        if (isset($_SESSION['usuario'])) {
            $nome = $_SESSION['usuario'];
            $imagem = $_SESSION['caminho'];
            $cargo = $_SESSION['cargo'];
            ?>

            
                <!-- Cabeçalho -->
          
                <header>
        <nav class="navbar">
            <div class="logo">
                <img src="assets/img/logonome.png" alt="Logo">
            </div>
            <ul class="nav-links">
                <li><a class="nav-links" href="index.php">Página Princial</a></li>
                <li><a class="nav-links" href="lista.php">Produtos</a></li>
                
                
                <div class="dropdown-parent">
                    <div class="dropdown">
                        <span><img class="profile-pic" src="<?php echo $imagem; ?>" alt="Perfil"></span>
                        <div class="dropdown-content">
                            <h3 class="drop"><?php echo $nome?></h3>
                            <p class="drop"><a href="inc.php">finalizar compras</a></p>
                            <p class="drop"><a href="LOGOUT.php">Sair</a></p> 
                        </div>
                    </div>
                </div>







<?php
if($cargo == 'ADM'){
?>

<li><a class="nav-links" href="novo_form.php">Novo</a></li> <!--só para adm-->

<?php
}
?>


            </ul>
        </nav>
    </header>
<!--shop-->

    <section class="shop" id="shop">


        <div class="shop-container container">
            <!--CONTEINER PRODUTO-->
            

<?php
if ($stmt->rowCount() > 0) {
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "<div class='box'>";
    echo "<img src='".$row['imagem_path']."' alt='".$row['nome']."'>";
    echo "<h3>".$row['nome']."</h3>";
    echo "<span>".$row['preco']."€</span>";
    echo "<a href='produto.php?id=" . $row['id'] . "&erro=0'><i class='bx bx-cart-add'></i></a>";
    echo "</div>";
  }
}
else


echo "<p>Nenhum produto encontrado!</p>";

?>
        </div>
    </section>

    <?php
        } else {
            header('location: index.php');
        }
        ?>

<script src="https://unpkg.com/scrollreveal"></script>
<script src="assets/js/main.js"></script>


</body>
</html>