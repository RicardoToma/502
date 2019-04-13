<?php

// A função file_get_contents faz a leitura
// e todo conteudo do arquivo
//$file = nl2br(file_get_contents('http://www.uol.com.br'));
$file = nl2br(file_get_contents('http://www.4linux.com.br/'));


// A função nl2br converte a quebra de linha do arquivo 
// texto para <br>
echo $file;