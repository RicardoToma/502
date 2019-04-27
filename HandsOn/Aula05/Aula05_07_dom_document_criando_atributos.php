<?php

$objDom = new DOMDocument();
$objDom->load('cursos.xml');

$ementa = $objDom->getElementsByTagName('ementa')->item(0);

$ementa->setAttribute('versao','1.0');

$ementa->setAttribute('versao_erro', '3.0');

$objDom->save('cursos.xml');

header('Content-Type: text/xml');

echo $objDom->saveXML();