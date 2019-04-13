<?php

//Cria uma conexao com o arquivo
$stream = fopen('emails.txt', 'r'); 

// Faz a leitura do arquivo na quantidade de bytes especificada
// nl2br -> transforma quebra de linha no texto em br no html
echo nl2br(fread($stream, 45));

// Fecha o stream liberando o arquivo
fclose($stream);

echo '<hr>';

$stream2 = fopen('emails.txt', 'r');
// 'r'  abre somente para leitura
// 'r+' abre para leitura e escrita
// 'w'  abre somente para escrita
// 'w+' abre para leitura e escrita 
// 'a'  abre somente para escrita, coloca o ponteiro no final do arquivo
//      Se o arquivo não existir, tenta cria-lo
// 'a+' abre para leitrua e escrita; coloca o ponteiro do arquivo
//      no final do arquivo. Se o arquivo na existir, tenta cria-lo

while (($pedaco = fread($stream2, 45)) != false) {
    echo nl2br($pedaco);
}

fclose($stream2);

echo '<hr>';

$stream3 = fopen('emails.txt', 'r');

// A funcao filesize retorna o tamanho do arquivo em bytes
echo nl2br(fread($stream3, filesize('emails.txt')));
fclose($stream3);