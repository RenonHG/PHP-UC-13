<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        display: flex;
        align-items: center;
        height: 100vh;
        justify-content: center;
        flex-direction: column;
        background-color: #303030;
    }

    form {
        display: flex;
        flex-direction: column;
        background-color: slateblue;
        border-radius: 15px;
        width: 300px;
        justify-content: center;
        align-items: center;
    }

    input[type="text"] {
        width: 200px;
        height: 30px;
        background-color: #f4f4f4;
        border: 1px solid black;
        border-radius: 15px;
        padding: 5px 5px;
        margin: 10px;
    }

    input[type="submit"] {
        width: 150px;
        height: 30px;
        justify-content: center;
        align-self: center;
        margin: 10px;
        border-radius: 5px;
    }
</style>

<pre>



<?php

if (isset($_POST) && !empty($_POST)) {
    // var_dump($_POST);

    $user = $_POST['usuario'];
    $password = $_POST['senha']; //'senha' e 'usuario' vem do campo name do input

    $conn = new PDO("mysql:host=localhost;dbname=db_login", "root", ""); //conexão com o banco de dados local
    // new PDO cria a conexão com, o banco de dados

    $script = "SELECT * FROM tb_usuario WHERE usuario = '{$user}' AND senha = '{$password}'";
    // $script guarda um script para a consulta do banco, nesse caso verifica se a senha e usuario é igual

    $resultado = $conn->query($script)->fetch();
    // -> query executa o script e o -> e o fetch retorna o resultado do script
    // $resultado guarda o resultado da consulta

    // var_dump($resultado);

    //verifica se a variável resultado tem algum valor
    if (!empty($resultado)) {
        echo 'Usuário validado com sucesso!';
        header('location:valido.php');
    } else {
        echo 'Usuário não encontrado!';
    }
}
?>
</pre>

<body>
    <form action="#" method="POST">
        <h1>Login</h1>
        <input type="text" name="usuario" placeholder="Login">
        <input type="text" name="senha" placeholder="Digite sua senha">
        <input type="submit" value="Enviar">
    </form>
</body>

</html>