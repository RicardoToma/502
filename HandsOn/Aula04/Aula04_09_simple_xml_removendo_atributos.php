<?php

// Carregando um xml de um arquivo
$objSimple = new SimpleXMLElement('cursos.xml', null, true);

// Inclue Atributo
//$objSimple->curso[0]->addAttribute('teste', 'teste'); 

// Exclue Atributo
unset($objSimple->curso[0]->attributes()->teste);

$objSimple->saveXML('cursos.xml');

header('Content-Type: text/xml');

echo $objSimple->asXML();
