<?php
if (isset($_GET['nome']) && isset($_GET['x'])){
    for ($i=0; $i<$_GET['x'];$i++)
    {
        echo ($_GET['nome']."<br/>");
    }
}

?>