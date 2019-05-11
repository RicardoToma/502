<?php

session_start();

function limpaDados($dado) {
    return htmlentities(strip_tags($dado, '<b><i><p<img>'));
}

foreach($_POST as $campo => $dado) {
    $$campo = limpaDados($dado);
}

if($token != $SESSION['token']) {
    echo 'Token Inválido!';
    exit;
}

require_once 'Classes/Teste.php';

$teste = new Teste();

$teste->inserir($campo);

header('Location: Aula10_02_lista.php');
