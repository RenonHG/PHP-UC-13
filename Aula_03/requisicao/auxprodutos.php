<?php

if (!empty($_GET)){
    $busca = $_GET['nome'];
    
}


$conexao = new PDO('mysql:host=localhost;dbname=db_requisicao', 'root', '');
$query = "select * from tb_produto WHERE titulo LIKE '%{$busca}%'";
$resultado = $conexao->query($query)->fetchAll();


echo '<pre>';
var_dump($resultado);


