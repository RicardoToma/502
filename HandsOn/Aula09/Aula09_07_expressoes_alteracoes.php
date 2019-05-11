<?php

$nomes = file_get_contents('nomes.txt');

//$nomes = preg_replace('/[\\n]/', '<br>', $nomes);
$nomes = nl2br($nomes);

echo $nomes;

echo '<hr>';

$linguagens = 'Java, PHP, RUBY';

$linguagens = preg_replace('/[, ]+/', '|', $linguagens);

echo $linguagens;