<?php

// Carregando o xml usando uma variavel

$xml = file_get_contents('cursos.xml');

$objDom = new DOMDocument();
$objDom->loadXML($xml);

echo '<pre>';

print_r($objDom);

echo '<hr>';

// Carregando o xml usando um arquivo

$objDom->load('cursos.xml');
 
print_r($objDom);

echo '</pre>';
