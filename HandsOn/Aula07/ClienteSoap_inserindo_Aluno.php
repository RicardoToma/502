<?php
/*
    Esta linha permanece somente durante os testes,
    desabilita o cache SOAP
*/
ini_set('soap.wsdl_cache_enabled', '0');

$wsdl = 'http://localhost/502/HandsOn/Aula07/wsdlAlunos.wsdl';

$cliente = new SoapClient($wsdl);

$params = [
    'nome'  => 'Novo Aluno da Silva',
    'email' => 'novo_aluno@gmail.com'
];

echo $cliente->inserir(json_encode($params));
