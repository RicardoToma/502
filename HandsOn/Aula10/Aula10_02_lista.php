<!DOCTYPE <!DOCTYPE html>
<html>
    <head>
        <title>Testando Seguranca</title>
    </head>
    <body>
        <?php
        require_once 'Classes/Teste.php';

        $teste = new Teste();

        $itens = $teste->listar();

        ?>
        <table>
            <thead>
                <tr>
                    <th>Campo</th>         
                </tr>
            </thead>
            <tbody>
            <?php
            foreach ($itens as $item):               
                ?>
                <tr>
                    <td><?=$item['campo'] ?></td>
                </tr>
                <?php
            endforeach;
            ?>
            </tbody>
        </table>
    </body>
</html>