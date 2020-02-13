<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        function imprimirNome($nome="Hélder"){
            echo $nome."<br/>";
        }
        function retornarNome($nome="Hélder"){
            return $nome."<br/>";
        }
        imprimirNome();
        imprimirNome("Ana");
        echo retornarNome("Hugo");
        ?>
    </body>
</html>
