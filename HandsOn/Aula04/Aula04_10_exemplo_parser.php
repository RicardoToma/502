
<?php

$parser = xml_parser_create();
xml_set_element_handler($parser, 'elInicio', 'elFinaliza');
xml_set_character_data_handler($parser, 'elTexto');

$xml = new SplFileObject('clientes.xml');

foreach($xml as $line) {
    xml_parse($parser, $line);
}

xml_parser_free($parser);

// Funções
function elInicio($parser, $nome, $atributos) {
    echo 'inicio Tag: ', $nome, ', atributos: ', 
    print_r($atributos, true);
    echo '<br>';
}

function elFinaliza($paser, $nome) {
    echo 'fim Tag: ', $nome;
    echo '<br>';
}

function elTexto($parser, $texto) {
    // Caso o texto preenchido não esteja sendo
    // impresso fazer uso do var_dump para identifcar
    // a causa
    if(trim($texto)) {
        echo 'texto: ', $texto;
        echo '<br>';
    }
}
