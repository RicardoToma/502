<?php

$file = new SplFileObject('turma.csv');

$file->setFlags(SplFileObject::READ_CSV | 
                SplFileObject::SKIP_EMPTY);

while (!$file->eof()) {
    $linha = $file->fgetcsv(';');

    // Alimenta as variaveis conforme as posicoes do array
    list($id, $nome, $email) = $linha;

    echo "Id: $id<br>";
    echo "Nome: $nome<br>";
    echo "e-mail: $email<br>";
    echo '<hr>';
}