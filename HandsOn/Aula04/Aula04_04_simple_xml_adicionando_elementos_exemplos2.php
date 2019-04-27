<?php

$objSimple = new SimpleXMLElement('cursos.xml', null, true);

$cargas = [
    '4500' => '40',
    '4501' => '45',
    '4502' => '36',
    '4450' => '50',
    '4452' => '50',
];

foreach ($objSimple as $curso) {
    $curso->addChild('carga_horaria', $cargas[(string) $curso->id]);
}

$objSimple->saveXML('cursos.xml');

header('Content-Type: text/xml');

echo $objSimple->asXML();

