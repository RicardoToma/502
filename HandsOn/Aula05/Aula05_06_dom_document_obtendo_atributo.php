<?php

$objDom = new DOMDocument();
$objDom->load('cursos.xml');

$curso = $objDom->getElementsByTagName('curso')->item(0);

echo 'Preço do curso: ' . $curso->getAttribute('preco');
