<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            .cinza{
                color:black;
                background-color: lightgray
            }
            .verde{
                color:darkgreen;
                background-color: lightgreen
            }
        </style>
    </head>
    <body>
        <table border ='1'>
            <tr><td>&nbsp;</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td><td>9</td><td>10</td></tr>
            <?php
            for ($i = 2; $i <= 10; $i++) {
                echo "<tr> <td>$i</td>";
                
                for ($j = 2; $j <= 10; $j++) {
                    echo "<td>" . $i * $j . "</td>";
                }
                echo "</tr>";
            }
            ?>
        </table>
    </body>
</html>
