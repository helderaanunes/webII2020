<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        $array1 = array("IFPE","CAFI");
      
        $array2 = ["campeao" => "Sport","vice"=>"nautico"];
        
        echo "<div>"; print_r($array1); echo "</div>";
        echo "<div>"; print_r($array2); echo "</div>";
        
        $array1 []="Afogados";
        $array2["verdadeiroCampeao"] = "Afogados";
        
        echo "<div>"; print_r($array1); echo "</div>";
        echo "<div>"; print_r($array2); echo "</div>";
        ?>
    </body>
</html>
