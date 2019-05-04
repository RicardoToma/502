<?php
/*
    Esta linha permanece somente durante os testes,
    desabilita o cache SOAP
*/
ini_set('soap.wsdl_cache_enabled', '0');

$wsdl = 'http://localhost/502/HandsOn/Aula07/wsdlAlunos.wsdl';

$cliente = new SoapClient($wsdl);

$params = [
    'id'    => '11',
    'nome'  => 'Novo Aluno da Silva Alterado',
    'email' => 'novo_aluno@gmail_alterado.com'
];

echo $cliente->alterar(json_encode($params));
