<?php

$file = new SplFileObject('produtos.txt', 'a+');

$file->fwrite("\nNovo Produto");

echo '<hr>Conteudo escrito<hr>';
