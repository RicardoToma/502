<?php

// Carregando um xml de um arquivo

$objSimple = new SimpleXMLElement('cursos.xml', null, true);

$objSimple->curso[0]->categoria = 'PHP Básico 2';
$objSimple->curso[1]->categoria = 'Orientação a Objetos 2';
$objSimple->curso[2]->categoria = 'PHP Enterprise 2';

// Salva as alterações no arquivo
$objSimple->saveXML('cursos.xml'); 

// Altera o header para text/xml (para exibir formatado)
header('Content-type: text/xml');

echo $objSimple->asXML(); // Retorna o xml