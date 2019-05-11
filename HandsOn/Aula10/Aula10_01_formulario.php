<?php
    session_start();

    $_SESSION['token'] = $_SESSION['token'] ?? uniqid(rand(), true);
?>
<!DOCTYPE html>
<html>  
    <head>
        <title>Testando segurança</title>
    </head>
    <body>
        <form method="post" action="teste.php">
            <input type="hidden" name="token"
                value="<?=$_SESSION['token'] ?? '' ?>">
            <label>Teste</label>
            <input type="text" name="campo"><br>
            <button type="submit">Enviar</button>
        </form>
    </body>
</html>
