<?php

$objSimple = new SimpleXMLElement('cursos.xml', null, true);

// xpath busca atributo preco <= 100
// o @ é informado antes de preco porque é um atributo.
$retorno = $objSimple->xpath("/cursos/curso[@preco<=1000]");

echo '<pre>';

print_r($retorno);

echo '<hr>';

// xpath busca o elemento id = 4452
$retorno = $objSimple->xpath("/cursos/curso[id=4452]");

print_r($retorno);

echo '</pre>';