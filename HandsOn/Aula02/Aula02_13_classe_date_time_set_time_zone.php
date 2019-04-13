<?php

$data = new DateTime();
echo 'Data/Hora Local: ' . $data->format('d-m-Y H:i:s');

$timeZone = new DateTimeZone('Asia/Tokyo');

$data->setTimezone($timeZone);

echo '<hr>';

echo 'Data/Hora Tokyo: ' . $data->format('d-m-Y H:i:s');

$data->setTimezone(new DateTimeZone('America/New York'));

echo '<hr>';

echo 'Data/Hora Nova York: ' . $data->format('d-m-Y H:i:s');
