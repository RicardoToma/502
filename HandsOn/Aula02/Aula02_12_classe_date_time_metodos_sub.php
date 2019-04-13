<?php

$data = new DateTime();
$data->sub(new DateInterval('P30D'));

echo 'Nova Data: ' . $data->format('d-m-Y');

echo '<hr>';

echo '<pre>';
$data = new DateTime();
var_dump($data);
$data->sub(new DateInterval('P2DT15H'));

echo 'Nova Data: ' . $data->format('d-m-Y');
echo '<hr>';
var_dump($data);