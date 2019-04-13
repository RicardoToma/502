<?php

$data = new DateTime();
$data->add(new DateInterval('P30D'));

echo 'Vencimento: ' . $data->format('d-m-Y');

echo '<pre>';

var_dump($data);