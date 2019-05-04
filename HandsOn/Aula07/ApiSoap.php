<?php
/*
    Esta linha permanece somente durante os Teste,
    desabilita o cache SOAP
*/
ini_set('spoa.wsdk_cache_enabled', '0');

require 'Alunos.php';

$objAluno = new Alunos();

$wsdl = 'http://localhost/502/HandsOn/Aula07/wsdlAlunos.wsdl';

$serverSoap = new SoapServer($wsdl);

$serverSoap->setObject($objAluno);

$serverSoap->handle();