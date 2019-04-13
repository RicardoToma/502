<?php

$file = new SplFileObject('produtos.txt');

foreach ($file as $conteudo) {
    echo $conteudo. '<br>';
}

echo '<hr>';

$file2 = new SplFileObject('produtos.txt');

while (!$file2->eof()) {
    echo nl2br($file2->fgets()); // Retorna uma linha
}