<?php
session_start();

if(isset($_SESSION['usuario'])) {
    header('location: loja.php');
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="shortcut icon" href="assets/imagens/favicon.ico" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Edu+TAS+Beginner:wght@500&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/img/homepage.png" type="image/x-icon">
    <title>Landing Page</title>
</head>
<body>

    <div class="main-login">
        
        <div class="left-login" id="left-login">
            
            <img onclick="voltar()" class="img" src="assets/img/logo.png">
        </div>
        <div class="right-login" id="right-login">
            <div class="card-info">
                
                
                <div class="card-buttons" id="buttons">          
                <button class="btn-login" onclick="login()" id="loginButton">Login</button>
                <button class="btn-login" onclick="registo()" id="registroButton">Registo</button>
            </div>
            
            <div class="card-login" id="log"> 
                <div class="textfield">
                    <form class="textfield" action="login.php" method="post">  
                        <h1 style="color: white;">LOGIN <br></h1>          
                        <label for="email">Email:</label>
                        <input name="email" class="input is-large" placeholder="Seu email" autofocus="" required><br>
                        <label for="senha">Senha:</label>
                        <input name="senha" class="input is-large" type="password" placeholder="Sua senha" required>
                        <button type="submit" class="btn-login">Entrar</button>
                        
                    </form>
                </div>
            </div>
            
            
    
            <div class="card-registo" id="reg">
                <div class="textfield">
                    <form class="textfield" action="registo.php" method="post" enctype="multipart/form-data">    
                        <h1 style="color: white;">Registo <br></h1>       
                        <label for="usuario">Nome:</label>
                        <input name="usuario" class="input is-large" placeholder="Seu utilizador" autofocus=""required><br>
                        <label for="email">Email:</label>
                        <input name="email" class="input is-large" type="email" placeholder="Seu email" required><br>
                        <label for="senha">Senha:</label>
                        <input name="senha" class="input is-large" type="password" placeholder="Sua senha" required><br>
                        <label for="imagem">Imagem do utilizador:</label>
                        <input type="file" id="imagem" name="arquivo" accept="image/*" required>
                        <button type="submit" class="btn-login">Registar</button>
                    </form>
                </div>
            </div>  


</body>

<script src="https://unpkg.com/scrollreveal"></script>
<script src="assets/js/main.js"></script>
</html>