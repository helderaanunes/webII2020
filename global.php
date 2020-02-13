<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       
<?php 
$nascimento = 1990;
$ano = 2020; 

function calcularIdade() {
    $GLOBALS['idade'] = $GLOBALS['ano'] - $GLOBALS['nascimento'];
}

calcularIdade();
echo $idade;
?>

    </body>
</html>
