<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">

    <title>Consulta Banco de Doidos</title>

</head>

<body>

    <h1>Consulta Banco de DOIDOS😵</h1>

    <form action="#" method="get">

        <!-- <div class="formulario">

            <div>
                <input type="radio" name="genero" id="action" value="Ação">
                <label for="action">Ação</label>
            </div>

            <div>
                <input type="radio" name="genero" id="adventure" value="Aventura">
                <label for="adventure">Aventura</label>
            </div>

            <div>
                <input type="radio" name="genero" id="biography" value="Biografia">
                <label for="biography">Biografia</label>
            </div>

            <div>
                <input type="radio" name="genero" id="crime" value="Crime">
                <label for="crime">Crime</label>
            </div>

            <div>
                <input type="radio" name="genero" id="drama" value="Drama">
                <label for="drama">Drama</label>
            </div>

            <div>
                <input type="radio" name="genero" id="fantasy" value="Fantasia">
                <label for="fantasy">Fantasia</label>
            </div>

            <div>
                <input type="radio" name="genero" id="romance" value="Romance">
                <label for="romance">Romance</label>
            </div>

            <div>
                <input type="radio" name="genero" id="sci-fi" value="Sci-fi">
                <label for="sci-fi">Sci-fi</label>
            </div>
        </div> -->

        <div class="formulario">

            <div>
                <input type="checkbox" name="Ação" id="action" value="Ação">
                <label for="action">Ação</label>
            </div>

            <div>
                <input type="checkbox" name="Aventura" id="adventure" value="Aventura">
                <label for="adventure">Aventura</label>
            </div>

            <div>
                <input type="checkbox" name="Biografria" id="biography" value="Biografia">
                <label for="biography">Biografia</label>
            </div>

            <div>
                <input type="checkbox" name="Crime" id="crime" value="Crime">
                <label for="crime">Crime</label>
            </div>

            <div>
                <input type="checkbox" name="genero-drama" id="drama" value="Drama">
                <label for="drama">Drama</label>
            </div>

            <div>
                <input type="checkbox" name="genero-fantasy" id="fantasy" value="Fantasia">
                <label for="fantasy">Fantasia</label>
            </div>

            <div>
                <input type="checkbox" name="genero-romance" id="romance" value="Romance">
                <label for="romance">Romance</label>
            </div>

            <div>
                <input type="checkbox" name="genero-scifi" id="sci-fi" value="Sci-fi">
                <label for="sci-fi">Sci-fi</label>
            </div>
        </div>

        <input type="submit" value="Buscar Filmes">
    </form>





</body>

<?php

$selecionado = $_GET;

foreach ($selecionado as $key => $value) {

    echo $value;

}

//     if (!empty($_GET)) {
        
//         if (isset($_GET)) { 
            
//             $conexao = new PDO('mysql:host=localhost;dbname=bd_filmes', 'root', '');
//             $query = "select * from tb_filme WHERE genero LIKE '%{$selecionado}%'";
//             $resultado = $conexao->query($query)->fetchAll();
        
//         }
        
//         echo "Você selecionou a categoria: " . $selecionado;
//     }

// if (empty($_GET)) {
//     echo "Você não selecionou nenhuma categoria! ";
// }

?>

</html>