<?php

// Altera a permissão do arquivo ou diretorio
// A função file_exists checa se um arquivo ou diretorio existe
if(file_exists('emails.txt')) {
    chmod('emails.txt', 0777);
    echo '<hr>Permissão Alterada<hr>';
}

// Cria um arquivo vazio
if (!file_exists('arquivo_vazio.txt')) {
    touch('arquivo_vazio.txt');         // Cria arquivo
    chmod('arquivo_vazio.txt', 0777);   
    echo '<hr>Arquivo criado<hr>';
}

// Copiando um arquivo
if(file_exists('arquivo_vazio.txt')) {
    copy('arquivo_vazio.txt', 'copia_arquivo_vazio.txt');
    chmod('copia_arquivo_vazio.txt', 0777);
    echo '<hr>Arquivo copiado<hr>';
}

// Criar um diretorio
if(!file_exists('novo_diretorio')) {
    mkdir('novo_diretorio');
    chmod('novo_diretorio', 0777);
    echo '<hr>Diretorio criado<hr>';
}

//  Renomear diretorio ou arquivo
if (file_exists('novo_diretorio')) {
    rename('novo_diretorio', 'diretorio_renomeado');
    chmod('diretorio_renomeado', 0777);
    echo '<hr>Diretorio renomeado<hr>';
}

// Excluir um arquivo
if(file_exists('copia_arquivo_vazio.txt')) {
    unlink('copia_arquivo_vazio.txt');
    echo '<hr>Arquivo Excluido<hr>';
}

echo '<pre>';

// Buscando arquivos
print_r(glob('*.txt'));
echo '<hr>';

// informacoes sobre o arquivo
print_r(stat('produtos.txt'));
echo '<hr>';

echo '</pre>';
