<?php

require 'Alunos.php';

$alunos = new Alunos();

$dados = json_decode(file_get_contents('php://input'),
                                       true);

$verbo = $_SERVER['REQUEST_METHOD'];

switch ($verbo) { 
    case 'GET':
        $id = $_GET['id'] ?? null;

        if($id){
            $resposta = $alunos->buscar($id);
        } else {
            $resposta = $alunos->listar();
        }

        if(!resposta) {
            header('HTTP/1.1 204');
            header('Content-Type: text/json');
            echo json_encode([
                'resposta' => 'Dados não encontrado!'
            ]);
            exit;
        }

        // Enviando Status Code
        header('HTTP/1.1. 200');
        // Enviando Tipo de conteudo
        header('Content-Type: text/json');
        echo json_encode($resposta);

        break;
    case 'POST':
        if(!$dados) {
            header('HTTP/1.1 400');
            header('Content-Type: text/json');
            echo json_encode([
                'resposta' => 'Dados não enviados !'
            ]);
        }

        if($alunos->inserir($dados)) {
            header('HTTP/1.1 200');
            header('Content-Type: text/json');
            echo json_encode([


            ]);
        }
}
