<?php

/**
 * Para instalar localidades:
 * Editar /etc/locale.gen
 * Executar locale-gen
 * verificar com locale - a
 */

 setlocale(LC_ALL, 'pt_BR.utf8');

 echo strftime('%B, %d, %Y - %A');
