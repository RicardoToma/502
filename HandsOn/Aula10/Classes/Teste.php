<?php

class Teste
{
    private $dsn  = 'pgsql:host=localhost;dbname=seguranca';
    private $usuario = 'seguranca';
    private $senha = '123456';
    private $conexao;

    public function __construct() {
        try{
            $this->conexao = new PDO($this->dsn, $this->usuario,
                                     $this->senha);
        } catch(PDOException $e) {
            return $e->getMessage();
        }
    }

    public function inserir($dados){
        try {
            $query = "INSERT INTO teste (campo) VALUES (:dados)";
            //$query = "INSERT INTO teste (campo) VALUES ('$dados')";

            $stmt = $this->conexao->prepare($query);

            $stmt->bindParam(':dados', $dados, PDO:: PARAM_STR, 255);

            return $stmt->execute();
            //return $this->conexao->exec($query);
        } catch(PDOExcetion $e) {
            return $e->getMessage();
        }
    }

    public function listar() {

        
    }


}