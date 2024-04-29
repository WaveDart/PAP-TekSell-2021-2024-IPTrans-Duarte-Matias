<?php
    include('conexao.php');

    $produto = $_GET["id"];
    $produto_ID = $_GET["id"];

    $query = "SELECT * FROM produtos where id = $produto";
    $stmt = $pdo->prepare($query);
    $stmt->execute();


    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $produto = $row['imagem_path'];
    $desc = $row['descricao'];
    $preco = $row['preco'];
    $cat = $row['categoria'];
    $nproduto = $row['nome'];
    $quantidadebd = $row['quantidade'];
    ?>


    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/produto.css">
        <link rel="shortcut icon" href="assets/imagens/favicon.ico" type="image/x-icon">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link href="https://fonts.googleapis.com/css2?family=Edu+TAS+Beginner:wght@500&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="assets/img/homepage.png" type="image/x-icon">
        <title><?php echo $nproduto?></title>
    </head>
    <body>
    <?php
            session_start();
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
                    <li><a class="nav-links" href="index.php">Página Principal</a></li>
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

                </ul>
            </nav>
        </header>
                    
        <div class="main">
        <div class="left">
                    

        <img src="<?php echo $produto?>" alt="" srcset="">



        </div>
            <div class="right">
                
    <h1 class = "Nome"><?php echo  $nproduto ?></h1>                        
                
    <p><?php echo $desc?></p><br>        
    <br>
    <h4>Categoria:</h4>
    <p><?php echo  $cat ?></p>
    <br>
    <h4>Preço:</h4>
    <p><?php echo $preco?>€</p>
<br>
    <form action="processar_carrinho.php" method="post">
                <input type="hidden" name="id" value="<?php echo $produto_ID; ?>">
                
                <input class="quantity" type="number" name="quantity" value="1" min="1" max="<?php echo $quantidadebd - 2; ?>">
                        <?php
                        echo 'Apenas '. $quantidadebd -2 .' disponiveis';
                        ?>
                <div class="carrinho"><button type="submit"><a class="btn-submit"><i class='bx bx-cart-add'>Adicionar ao carrinho</i></a></button>
   <?php

    $erro = $_GET['erro']; 
if ($erro == 1) {
    echo "Sem stock";
    exit;
}
else{
    exit;
}
   ?> 
                </div>
            </form>



    </div>
    </div>
        
    </body>



    </html>