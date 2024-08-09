<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="background">

        <h1 class="titulo">Loop - Veículos</h1>

    </div>


</body>

</html>

<?php

$carros = [
    [
        'modelo' => 'AUDI TT',
        'cor' => 'VERMELHO',
        'ano' => '2015',
        'placa' => 'X6Y4NJ0',
        'marca' => 'AUDI',
        'qtd portas' => '2',
        'tipo' => 'CARRO'
    ],
    [
        'modelo' => 'BMW X5',
        'cor' => 'PRETO',
        'ano' => '2018',
        'placa' => 'A3B5CK9',
        'marca' => 'BMW',
        'qtd portas' => '4',
        'tipo' => 'CARRO'
    ],
    [
        'modelo' => 'FIAT UNO',
        'cor' => 'AZUL',
        'ano' => '2012',
        'placa' => 'D7E2FH1',
        'marca' => 'FIAT',
        'qtd portas' => '4',
        'tipo' => 'CARRO'
    ],
    [
        'modelo' => 'HONDA CIVIC',
        'cor' => 'BRANCO',
        'ano' => '2019',
        'placa' => 'K8H2MN4',
        'marca' => 'HONDA',
        'qtd portas' => '4',
        'tipo' => 'CARRO'
    ],
    [
        'modelo' => 'MERCEDES-BENZ CLA',
        'cor' => 'PRATA',
        'ano' => '2020',
        'placa' => 'T9R1QW6',
        'marca' => 'MERCEDES-BENZ',
        'qtd portas' => '4',
        'tipo' => 'CARRO'
    ],
    [
        'modelo' => 'TOYOTA COROLLA',
        'cor' => 'CINZA',
        'ano' => '2017',
        'placa' => 'G6J3PS8',
        'marca' => 'TOYOTA',
        'qtd portas' => '4',
        'tipo' => 'CARRO'
    ],
    [
        'modelo' => 'VOLKSWAGEN GOL',
        'cor' => 'VERMELHO',
        'ano' => '2016',
        'placa' => 'Z5V9TB2',
        'marca' => 'VOLKSWAGEN',
        'qtd portas' => '4',
        'tipo' => 'CARRO'
    ],
    [
        'modelo' => 'FORD FIESTA',
        'cor' => 'AZUL',
        'ano' => '2014',
        'placa' => 'M1N8DF3',
        'marca' => 'FORD',
        'qtd portas' => '4',
        'tipo' => 'CARRO'
    ],
    [
        'modelo' => 'CHEVROLET ONIX',
        'cor' => 'PRATA',
        'ano' => '2019',
        'placa' => 'L4S7ER0',
        'marca' => 'CHEVROLET',
        'qtd portas' => '4',
        'tipo' => 'CARRO'
    ],
    [
        'modelo' => 'NISSAN VERSA',
        'cor' => 'PRETO',
        'ano' => '2015',
        'placa' => 'Y2T6OL5',
        'marca' => 'NISSAN',
        'qtd portas' => '4',
        'tipo' => 'CARRO'
    ],
    [
        'modelo' => 'HARLEY-DAVIDSON SPORTSTER',
        'cor' => 'PRETO',
        'ano' => '2019',
        'placa' => 'P5A2WF8',
        'marca' => 'HARLEY-DAVIDSON',
        'qtd portas' => '0',
        'tipo' => 'MOTO'
    ],
    [
        'modelo' => 'SUZUKI GSX-R1000',
        'cor' => 'AZUL',
        'ano' => '2021',
        'placa' => 'R8X4UY2',
        'marca' => 'SUZUKI',
        'qtd portas' => '0',
        'tipo' => 'MOTO'
    ],
    [
        'modelo' => 'DUCATI PANIGALE V4',
        'cor' => 'VERMELHO',
        'ano' => '2020',
        'placa' => 'E6D9QC1',
        'marca' => 'DUCATI',
        'qtd portas' => '0',
        'tipo' => 'MOTO'
    ],
    [
        'modelo' => 'YAMAHA YZF-R6',
        'cor' => 'BRANCO',
        'ano' => '2018',
        'placa' => 'S2H6VU7',
        'marca' => 'YAMAHA',
        'qtd portas' => '0',
        'tipo' => 'MOTO'
    ],
    [
        'modelo' => 'KAWASAKI NINJA 650',
        'cor' => 'VERDE',
        'ano' => '2017',
        'placa' => 'T3N7IX5',
        'marca' => 'KAWASAKI',
        'qtd portas' => '0',
        'tipo' => 'MOTO'
    ],
    [
        'modelo' => 'TRIUMPH STREET TRIPLE',
        'cor' => 'LARANJA',
        'ano' => '2016',
        'placa' => 'O9K3ZP4',
        'marca' => 'TRIUMPH',
        'qtd portas' => '0',
        'tipo' => 'MOTO'
    ],
    [
        'modelo' => 'VESPA PRIMAVERA',
        'cor' => 'AMARELO',
        'ano' => '2015',
        'placa' => 'N5M8RQ2',
        'marca' => 'VESPA',
        'qtd portas' => '0',
        'tipo' => 'MOTO'
    ],
    [
        'modelo' => 'INDIAN SCOUT',
        'cor' => 'MARROM',
        'ano' => '2019',
        'placa' => 'W2Q8DF4',
        'marca' => 'INDIAN',
        'qtd portas' => '0',
        'tipo' => 'MOTO'
    ],
    [
        'modelo' => 'CHEVROLET CAMARO',
        'cor' => 'AMARELO',
        'ano' => '2017',
        'placa' => 'B2A4EF6',
        'marca' => 'CHEVROLET',
        'qtd portas' => '2',
        'tipo' => 'CARRO'
    ],
    [
        'modelo' => 'FORD MUSTANG',
        'cor' => 'AZUL',
        'ano' => '2018',
        'placa' => 'G9H6KL2',
        'marca' => 'FORD',
        'qtd portas' => '2',
        'tipo' => 'CARRO'
    ]
]
?>

<table class="tabela">
    <tr>
        <th>Modelo</th>
        <th>Cor</th>
        <th>Ano</th>
        <th>Placa</th>
        <th>Marca</th>
        <th>Quantidades Portas</th>
        <th>Tipo</th>
        <th>Remover</th>
    </tr>

    <?php foreach ($carros as $dados) { ?>
        <tr>
            <td><?= $dados['modelo'] ?></td>
            <td><?= $dados['cor'] ?></td>
            <td><?= $dados['ano'] ?></td>
            <td><?= $dados['placa'] ?></td>
            <td><?= $dados['marca'] ?></td>
            <td><?= $dados['qtd portas'] ?></td>
            <td><?= $dados['tipo'] ?></td>

            <td><button>Apagar</button></td>
        </tr>

    <?php } ?>


</table>