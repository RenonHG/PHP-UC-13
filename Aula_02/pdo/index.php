<?php include_once './pages/header.html';

// PDO → php document object

$conexao = new PDO("mysql:host=localhost;dbname=db_policebox", "root", "");
$query = "SELECT * FROM tb_produto";

$produtos = $conexao-> query($query)->fetchAll();

include './pages/produto.php';