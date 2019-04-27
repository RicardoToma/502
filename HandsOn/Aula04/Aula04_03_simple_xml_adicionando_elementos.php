<?php


$objSimple = new SimpleXMLElement('cursos.xml', null, true);

$novoCurso = $objSimple->addChild('curso');
$id        = $novoCurso->addChild('id', 4452);
$nome      = $novoCurso->addChild('nome', 'Linux Security in Cloud');
$categoria = $novoCurso->addChild('categoria', 'Linux');

$objSimple->saveXML('cursos.xml');

header('Content-Type: text/xml');

echo $objSimple->asXML();