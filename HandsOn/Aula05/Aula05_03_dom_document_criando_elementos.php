<?php

$objDom = new DOMDocument();
$objDom->load('cursos.xml');

$curso = $objDom->getElementsByTagName('curso');

// Criando um novo elemento
$dataInicio = $objDom->createElement('data_inicio','2018-10-12');

// Adiciona o novo nó ao elemento desejado
$curso->item(0)->appendChild($dataInicio); 

$objDom->save('cursos.xml');

header('Content-Type: text/xml');

echo $objDom->saveXML();