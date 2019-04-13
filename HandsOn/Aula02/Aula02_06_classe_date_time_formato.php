<?php

$objDateTime = new DateTime();

echo $objDateTime->format('d/m/Y H:i:s');

echo '<hr>';

$objDateTime = new DateTime('2019-02-10');

echo $objDateTime->format('d/m/Y H:i:s');
