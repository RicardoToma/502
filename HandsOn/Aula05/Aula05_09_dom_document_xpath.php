<?php

$objDom = new DOMDocument();
$objDom->load('cursos.xml');

$objDomXpath = new DOMXPath($objDom);

$retorno = $objDomXpath->query("/cursos/curso[@preco='900']");

foreach ($retorno as $item) {
    echo 'Id do curso: ' . $item->getElementsByTagName
    ('id')->item(0)->nodeValue . '<br>';
    echo 'Nome do curso: ' . 
    $item->getElementsByTagName('nome')->item(0)
    ->nodeValue . '<br>';
    echo 'Categoria do curso: ' . 
    $item->getElementsByTagName('categoria')->item(0)
    ->nodeValue . '<br>';
    echo 'Carga/Horaria: ' . 
    $item-getElementsByTagName('carga_horaria')->item
    (0)->nodevelue . '<br>';
}

echo '<hr>';

$retorno = $objDomXpath->query("/cursos/curso[id='4501']");

foreach ($retorno as $item) {
    echo 'Id do curso: ' . $item->getElementsByTagName
    ('id')->item(0)->nodeValue . '<br>';

    echo 'Nome do curso: ' . $item->getElementsByTagName
    ('nome')->item(0)->nodeValue . '<br>';

    echo 'Categoria do curso: ' . $item->getElementsByTagName
    ('categoria')->item(0)->nodeValue . '<br>';

    echo 'Carga/Horaria: ' . $item->getElementsByTagName
    ('carga_horaria')->item(0)->nodeValue . '<br>';
}

