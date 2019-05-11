<?php

$string = 'Expressões Regulares com PHP';

echo '<pre>';

var_dump(preg_match('/PHP/', $string));

preg_match('/PHP/', $string, $retorno);

echo '<hr>';

print_r($retorno);

echo '</pre>';
