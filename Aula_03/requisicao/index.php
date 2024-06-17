<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    form {
        display: flex;
        flex-direction: column;
        width: 200px;
        gap: 20px;
    }
</style>

<body>

    <h1>Requisição</h1>

    <form action="auxindex.php" method="get">

        <input type="text" name="user" id="user" placeholder="User">
        <input type="password" name="senha" id="senha" placeholder="Senha">
        <input type="submit" value="Entrar">

    </form>

</body>

</html>