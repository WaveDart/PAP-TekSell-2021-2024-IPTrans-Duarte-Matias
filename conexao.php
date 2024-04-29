<?php
$host="127.0.0.1";
$user="root";
$password="";
$dbname="teksell";

$pdo = new PDO("mysql:host=$host;dbname=$dbname", "$user", "$password");
/*
include('login.php');

try {
    $query = "SELECT nome FROM alunos where nome = :senha and senha = :senha;";
    $stmt = $pdo->query($query);

    // Extrai o valor da primeira coluna da primeira linha
    $nome = $stmt->fetchColumn();

    echo "Nome: $nome";
} catch (PDOException $e) {
    die("Erro na execução da consulta: " . $e->getMessage());
}

*/

?>