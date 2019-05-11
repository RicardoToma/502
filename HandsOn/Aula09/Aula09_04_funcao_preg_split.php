<?php

$linguagens = 'Java, , , , , , PHP, , , , , , , PHP7, Ruby, Phyton, .Net';

//$retorno = preg_replace('/(JAVA|java|Java)/', 'PHP', $linguagens);
// Vantagem do uso do Regex
$retorno = preg_split('/[, ]+/', $linguagens);

echo '<pre>';

print_r($retorno);

echo '<hr>';

print_r(explode(', ', $linguagens));

echo '</pre>';
