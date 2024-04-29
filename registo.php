<?php
include ('conexao.php');

// IMAGE CONFIG
if (isset($_FILES['arquivo'])) {
    $arquivo = $_FILES['arquivo'];

    $pasta = "assets/img/clientes_img/";
    $antigonome = $arquivo['name'];
    $nome = uniqid();
    $cargo = "cliente";

    $extensao = strtolower(pathinfo($antigonome, PATHINFO_EXTENSION));
    $path = $pasta . $nome . "." . $extensao;
    $funcionou = move_uploaded_file($arquivo["tmp_name"], $path);

    $nome = $_POST['usuario'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $imgpath = $path;

    // Verificar se o usuário já existe
    $verify = "SELECT * FROM `teksell`.utilizadores WHERE utilizador = :nome";
    $stmtVerify = $pdo->prepare($verify);
    $stmtVerify->bindParam(':nome', $nome);

    if ($stmtVerify->execute()) {
        $row = $stmtVerify->rowCount();

        // Verificar se o utilizador já está registrado
        if ($row > 0) {
            header('Location: erro.html');
            exit();
        }
    } else {
        echo "Erro ao executar a consulta.";
    }

    // Se o usuário não existe, inserir na base de dados
    $query = "INSERT INTO `teksell`.utilizadores (id_utilizador, utilizador, senha, email, caminho, cargo) VALUES (0, :nome, md5(:senha), :email, :caminho, :cargo)";
    $stmtInsert = $pdo->prepare($query);
    $stmtInsert->bindParam(':nome', $nome);
    $stmtInsert->bindParam(':senha', $senha); 
    $stmtInsert->bindParam(':email', $email);
    $stmtInsert->bindParam(':caminho', $imgpath);
    $stmtInsert->bindParam(':cargo', $cargo);

if ($stmtInsert->execute()) { 
    header("location: index.php");
} else {
    echo "Erro ao inserir dados no banco de dados.";
}
}
?>
