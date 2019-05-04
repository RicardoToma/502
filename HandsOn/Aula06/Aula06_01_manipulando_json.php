<?php


// array chamado usuarios
$usuarios = [
    'nome'  => 'Amando dos Santos',
    'email' => 'amanda.santos@gmail.com',
    'senha' => '123456',
    'perfil' => [
        'admin',
        'professor',
        'coordenador'
    ]
];

echo '<pre>';

print_r($usuarios);

echo '<hr>';

// Converte array em Json
$json = json_encode($usuarios);

print_r($json);

echo '<hr>';

// converte o arquivo Json em Array
// O parametro true indica que vai criar um array 
// associativo.
$array = json_decode($json, true);

print_r($array);

echo '</pre>';


// site https://jsonlint.com/ é um validador de arquivo JSON
