<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $array1 = array("IFPE","CAFI");
        echo "<div>"; print_r($array1); echo "</div>";
        unset($array1[0]);
        echo "<div>"; print_r($array1); echo "</div>";
        ?>
    </body>
</html>
