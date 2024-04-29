<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/loja.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">
    <script src="https://threejs.org/build/three.js"></script>

    <title>TekSell</title>
</head>

<body>
    <div class="main">

        <?php
        session_start();

        if (isset($_SESSION['usuario'])) {
            $nome = $_SESSION['usuario'];
            $imagem = $_SESSION['caminho'];
            ?>

            
        <header>
        <nav class="navbar">
            <div class="logo">
                <img src="assets/img/logonome.png" alt="Logo">
            </div>
            <ul class="nav-links">
                <li><a class="nav-links" href="">Página Princial</a></li>
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
          

            <div class="home-content container">
                

        <?php
        } else {
            header('location: index.php');
        }
        ?>

    </div>

  
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>
