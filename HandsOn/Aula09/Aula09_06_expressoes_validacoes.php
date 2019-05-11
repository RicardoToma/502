<?php

$cep = '04475-270';

if(preg_match('/^[0-9]{5}-[0-9]{3}$/', $cep)) {
    echo "$cep é valido<hr>";
} else {
    echo "$cep é invalido<hr>";
}

$rg = '34.991.910-0';

if(preg_match('/^[0-9]{2}\.[0-9]{3}\.[0-9]{3}-[a-z0-9]$/', $rg)){
    echo "$rg é valido<hr>";
} else {
    echo "$rg é invalido<hr>";
}

$placa = 'HDO-6613';
if(preg_match('/^[A-Z]{3}-[0-9]{4}$/', $placa)){
    echo "$placa é valida<hr>";
} else {
    echo "$placa é invalida<hr>";
}


$telefone = '(11) 1234-5678';
if(preg_match('/^(\([0-9]{2}\))\s([9]{1})?([0-9]{4})-([0-9]{4})$/', $telefone)){
    echo "$telefone é valido<hr>";
} else {
    echo "$telefone é invalido<hr>";
}