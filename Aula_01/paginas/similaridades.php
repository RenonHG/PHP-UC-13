<h1>Olá mundo</h1>

<?php //TAG para trabalhar com PHP

echo "<h1>Olá PHP</h1>";

// Similaridades entre o PHP e C#

// O comentário é feito da mesma forma, // ou /**/

// Variáveis
$texto = "renon";

// Concatenação
echo "Bom dia Usuário: " . $texto . "<br>";

// Serve para verificar o tipo e conteúdo da variável
var_dump($texto);
echo "<br>";
//----------------------------------

// Condições
if (1 != 1) {
    echo "O IF deu bom!!!";
} else if (2 == 2) {
    echo "O Else If deu certo!!!";
} else {
    echo "O IF não deu Certo!!!";
}


// ↓↓↓ TERNARIO ↓↓↓ 
// Sintaxe: condição ? verdadeiro : falso
echo "<br>";
echo 1 == 1 ? "Ternario deu certo" : "Não deu certo";

$resposta = $texto == "" ? "Ternario deu certo" : "Não deu certo";
echo "<br>";
var_dump($resposta);

//FOR
echo "<br>";
for ($cont = 1; $cont <= 5; $cont++) {
    echo $cont . "<br>";
}

$contador = 0;
while ($contador < 10) {
    echo "Olha eu aqui";
    echo "<br>";
    $contador++;
}

function Gui (){
    echo "Oi, eu sou uma função";
}

Gui();



?>