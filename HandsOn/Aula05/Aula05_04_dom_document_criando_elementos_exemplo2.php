<?php

$objDom = new DOMDocument();
$objDom->load('cursos.xml');

$curso = $objDom->getElementsByTagName('curso');

$ementa = $objDom->createElement('ementa');

// Inclui a tag ementa dentro do curso 1
$curso->item(0)->appendChild($ementa);

/*
foreach($curso as $item) {
    $item->appendChild($ementa)
}
*/

$arrayItens = [
    $objDom->createElement('topico1', 'Introducao ao PHP'),
    $objDom->createElement('topico2', 'Estrutura de Decisão'),
    $objDom->createElement('topico3', 'Estrutura de Repetição'),
    $objDom->createElement('topico4', 'Estrutura de Repetição')
];

foreach ($arrayItens as $item) {
    $ementa->appendChild($item);
}

$objDom->save('cursos.xml');

header('Content-Type: text/xml');

echo $objDom->saveXML();