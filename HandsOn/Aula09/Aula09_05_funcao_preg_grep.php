<?php

$letras = [
    'a','A','b','B','c','C','d','D','e','E'
];

//$retorno = preg_grep('/[a-z]/', $letras);
//$retorno = preg_grep('/[A-Z]/', $letras);
$retorno = preg_grep('/[^a-z]/', $letras);

echo '<pre>';

print_r($retorno);

echo '</pre>';
