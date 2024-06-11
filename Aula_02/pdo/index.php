<?php include_once './pages/header.html';
$_ENV = parse_ini_file('.env');
// PDO → php document object

$conexao = new PDO("mysql:host={$_ENV['HOST']};dbname={$_ENV['DATABASE']}", $_ENV['USER'], $_ENV['PASSWORD']);
$query = "SELECT * FROM tb_produto";

$produtos = $conexao-> query($query)->fetchAll();

include './pages/produto.php';