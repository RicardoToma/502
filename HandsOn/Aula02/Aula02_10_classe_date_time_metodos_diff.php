<?php

$vencimento = new DateTime('2019-08-10');
$data       = new DateTime();

$retorno = $data->diff($vencimento);

echo $retorno->format("%R %Y anos %m meses %d dias %H horas %i minutos");

echo '<hr>';

$retorno = $vencimento->diff($data);

echo $retorno->format("%R %d dias");

echo '<hr>';

echo '<pre>';

var_dump($retorno);

echo '</pre>';
