<?php

$string = 'Trabalhando com PHP e PHP7 e PHP5.5';

if(preg_match_all('/PHP/', $string, $retorno)) {
    echo '<pre>';
    print_r($retorno);
    echo '</pre>';
}