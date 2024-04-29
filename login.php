<?php
include('conexao.php');

$email = $_POST['email'];
$senha = $_POST['senha'];

try {
    $verify = "SELECT * FROM `teksell`.`utilizadores` WHERE email = :email AND senha = md5(:senha)";
    $stmt = $pdo->prepare($verify);

    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':senha', $senha); 

    if ($stmt->execute()) {
        $row = $stmt->rowCount();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);


        if ($row == 1) {
            session_start();
            $_SESSION['usuario'] = $result['utilizador'];
            $_SESSION['caminho'] = $result['caminho']; // Ajuste aqui
            $_SESSION['cargo'] = $result['cargo']; // Ajuste aqui

            echo $result['caminho'];


         header("location: loja.php");
            exit();
        } else {
         header('location: erro.html');
            exit();
        }
    } else {
        throw new Exception("Erro ao executar a consulta. Detalhes do erro: " . implode(", ", $stmt->errorInfo()));
    }
} catch (Exception $e) {
    echo "Erro: " . $e->getMessage();
}
?>
