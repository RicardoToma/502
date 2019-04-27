<?php

// Carregando um xml de um arquivo

$objSimple = new SimpleXMLElement('cursos.xml', null, true);

echo '<pre>';

print_r($objSimple);

echo '<hr>';

$retornoXML = file_get_contents('cursos.xml');

$objSimple2 = new SimpleXMLElement($retornoXML);

print_r($objSimple2);

echo '<hr>';

foreach ($objSimple as $curso) {
    echo 'Id do Curso: ' . $curso->id;
    echo '<br>Nome do Curso: ' . $curso->nome;
    echo '<br>Categoria do Curso: ' . $curso->categoria;
    echo '<br>';
}

echo '</pre>';

