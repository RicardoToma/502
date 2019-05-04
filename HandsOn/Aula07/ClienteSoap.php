<?php
/*
    Esta linha permanece somente durante os testes,
    desabilita o cache SOAP
*/
ini_set('soap.wsdl_cache_enabled', '0');

$wsdl = 'http://localhost/502/HandsOn/Aula07/wsdlAlunos.wsdl';

$cliente = new SoapClient($wsdl);

$aluno = json_decode($cliente->buscar(6));

echo '<hr><b>Buscando o id:6</b><br>';

echo 'Id: ' . $aluno->id;
echo '<br>Nome: ' . $aluno->nome;
echo '<br>Email: ' . $aluno->email;
echo '<hr>';

$retorno = json_decode($cliente->listar());

echo '<b>Listando todos os registros</b><br>';

foreach ($retorno as $aluno) {
    echo 'Id: ' .  $aluno->id;
    echo '<br>Nome: ' . $aluno->nome;
    echo '<br>Email: ' . $aluno->email;
    echo '<hr>';
}