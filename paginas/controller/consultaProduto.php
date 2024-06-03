<?php

// $nome_produto = $_POST['nome'];
// $valor = $_POST['preco'];
$nome_produto = [
    "Monitor",
    "Teclado",
    "Mouse"
];
$valor = [
    999.99,
    69.98,
    15.99
];
?>

<?php for ($cont=0; $cont < count($nome_produto); $cont++) { ?>
    
<h1> <?= $nome_produto[$cont]?> </h1>
<span><?= $valor[$cont]?> </span>

<?php } ?>

