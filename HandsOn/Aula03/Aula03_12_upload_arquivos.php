<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
        <input type="hidden" name="MAX_FILE_SIZE" value="10000000">
        selecione o arquivo:<br>
        <input type="file" name="arquivo">
        <br><br>
        <input type="submit" value="Enviar">
    </form>
    <?php
        if($_POST || $_FILES) {
            // echo '<pre>';
            // var_dump($_FILES);
            // exit;

            $dir = 'fotos';
            
            if(!file_exists($dir)) {
                mkdir($dir);              
            }

            $arrayArquivo = explode('.', $_FILES['arquivo']['name']);

            $nomeDestino = "$dir/" . $arrayArquivo[0] . '_'
            . microtime() . '.' . $arrayArquivo[1];

            $nomeOrigem = $_FILES['arquivo']['tmp_name'];

            if(move_uploaded_file($nomeOrigem, $nomeDestino)){
                echo '<hr>Upload realizado<hr>';
            }
        }
    ?>
</body>
</html>