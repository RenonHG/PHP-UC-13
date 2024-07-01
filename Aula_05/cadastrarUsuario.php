<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
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

<body>
    <form action="auxCadastrarUsuario.php" method="POST">
        <h1>Cadastrar Usuario</h1>
        <input type="text" name="nome" placeholder="Nome">
        <input type="text" name="usuario" placeholder="Usuario">
        <input type="text" name="senha" placeholder="Senha">
        <input type="text" name="confirmar" placeholder="Confirmar Senha">
        <input type="submit" value="Enviar">
    </form>
</body>

</html>