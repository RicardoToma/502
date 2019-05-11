<?php

$string = 'O Java é a melhor linguagem para o desenvolvimento web';

$string = preg_replace('/(JAVA|java|Java)/', 'PHP', $string);

echo $string;
