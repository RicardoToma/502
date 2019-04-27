<?php

// Carregando um xml de um arquivo
$objSimple = new SimpleXMLElement('cursos.xml', null, true);

$objSimple->curso[0]->addAttribute('preco', 900);
$objSimple->curso[1]->addAttribute('preco', 1000);
$objSimple->curso[2]->addAttribute('preco', 1200);
$objSimple->curso[3]->addAttribute('preco', 1000);
$objSimple->curso[4]->addAttribute('preco', 1300);

// Salva as alterações no arquivo
$objSimple->saveXML('cursos.xml'); 

// Altera o header para text/xml (para exibir formatado)
header('Content-type: text/xml');

// Retorna o xml
echo $objSimple->asXML(); 