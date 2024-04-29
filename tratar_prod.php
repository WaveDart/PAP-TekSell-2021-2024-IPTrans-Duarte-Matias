<?php
include('conexao.php');

        $nomeProduto = $_POST['name'];
        $tipologia = $_POST['Tipologia'];
        $descricao = $_POST['Descricao'];
        $quantidade = $_POST['Quantidade'];
        $preco = $_POST['Preco'];
        
        // Processa a imagem
        $arquivo = $_FILES['arquivo'];
        $nomeOriginal = $arquivo['name'];
        $extensao = strtolower(pathinfo($nomeOriginal, PATHINFO_EXTENSION));
        $pasta = 'assets/img/produtos/';
        $novoNome = uniqid() . '.' . $extensao;
        $caminhoArquivo = $pasta . $novoNome;
        
        if (move_uploaded_file($arquivo['tmp_name'], $caminhoArquivo)) {
            echo "Arquivo enviado com sucesso.";
        } else {
            echo "Ocorreu um erro ao enviar o arquivo.";
        }


$query = "INSERT INTO `teksell`.produtos (id, nome, descricao, preco, quantidade,
 categoria, imagem_path, data_registo) VALUES (0, :nomeProduto, :descricao, :preco,
  :quantidade, :tipologia, :caminhoArquivo, NOW())";
$stmtInsert = $pdo->prepare($query);
$stmtInsert->bindParam(':nomeProduto', $nomeProduto);
$stmtInsert->bindParam(':descricao', $descricao);
$stmtInsert->bindParam(':preco', $preco);
$stmtInsert->bindParam(':quantidade', $quantidade);
$stmtInsert->bindParam(':tipologia', $tipologia);   
$stmtInsert->bindParam(':caminhoArquivo', $caminhoArquivo); 

if ($stmtInsert->execute()) {
    header("location: lista.php");
} else {
    echo "Erro ao inserir dados no banco de dados.";
}
?>
