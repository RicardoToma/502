<?php

// Carregando um xml de um arquivo
$objSimple = new SimpleXMLElement('cursos.xml', null, true);

$objSimple->curso[0]->attributes()->preco = 950;

$objSimple->saveXML('cursos.xml');

header('Content-Type: text/xml');

echo $objSimple->asXML();