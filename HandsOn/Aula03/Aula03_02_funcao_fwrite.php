<?php

$stream = fopen('emails.txt','a+');


fwrite($stream, "\naline.santos@gmail.com\n");
fwrite($stream, "juliana.santos@gmail.com\n");
fwrite($stream, "carol.santos@gmail.com\n");
fwrite($stream, "lais.santos@gmail.com\n");

fclose($stream);

echo '<hr>Dados escritos com sucesso!<hr>';
