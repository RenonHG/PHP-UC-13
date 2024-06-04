<?php include_once './pages/header.html';

// objetivo
// criar um array com as info dos produtos
//laço que vai passar pelo array e criar os produtos
// poster, titulo, preço e avaliação

/** Acordo de cavalheiros
 * $snake_case -> variáveis
 * $camelCase -> variáveis
 * $kebab-case -> imagens
 * $PascalCase -> funções, classes
 *
 * palavra singular -> variáveis, classes, objetos  
 * palavra plural -> arrays, json,
 */

$produtos = [
    [
        'titulo' => 'Baldur\'s Gate 3',
        'preco' => 290.00,
        'avaliacao' => 3,
        'poster' => 'baldurs-gate-3.jpg'
    ],
    [
        'titulo' => 'Death Stranding',
        'preco' => 139.00,
        'avaliacao' => 2,
        'poster' => 'death-stranding.png'
    ],
    [
        'titulo' => 'Jedi Survivor',
        'preco' => 139.00,
        'avaliacao' => 5,
        'poster' => 'jedi-survivor.png'
    ],

    [
        'titulo' => 'Baldur\'s Gate 3',
        'preco' => 290.00,
        'avaliacao' => 3,
        'poster' => 'baldurs-gate-3.jpg'
    ],
    [
        'titulo' => 'Death Stranding',
        'preco' => 139.00,
        'avaliacao' => 2,
        'poster' => 'death-stranding.png'
    ],
    [
        'titulo' => 'Jedi Survivor',
        'preco' => 139.00,
        'avaliacao' => 5,
        'poster' => 'jedi-survivor.png'
    ],[
        'titulo' => 'Baldur\'s Gate 3',
        'preco' => 290.00,
        'avaliacao' => 3,
        'poster' => 'baldurs-gate-3.jpg'
    ],
    [
        'titulo' => 'Death Stranding',
        'preco' => 139.00,
        'avaliacao' => 2,
        'poster' => 'death-stranding.png'
    ],
    [
        'titulo' => 'Jedi Survivor',
        'preco' => 139.00,
        'avaliacao' => 5,
        'poster' => 'jedi-survivor.png'
    ]
];

// foreach ($produtos as $key => $info) {
//     echo $key . ' → ' . $info['titulo'] . ' | ';
//     echo $key . ' → ' . $info['preco'] . ' | ';
//     echo $key . ' → ' . $info['avaliacao'] . ' | ';
//     echo $key . ' → ' . $info['poster'] . '<br>';
// };

include './pages/produto.php';