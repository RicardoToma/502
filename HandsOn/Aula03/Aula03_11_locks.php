<?php

$stream = fopen('produtos.txt', 'a+');

if(flock($stream, LOCK_EX | LOCK_NB)) {
    fwrite($stream, "\nGravando um novo produto...");
    sleep(10);
    flock($stream, LOCK_UN);
} else {
    echo 'Aguarde arquivo bloqueado...';
}

fclose($stream);