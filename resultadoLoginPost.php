<?php
//isset verifica se a variavel está "setada"
if (isset($_POST['login']) && $_POST['login']=="helder"
    && isset($_POST['senha']) && $_POST['senha']=="toddynho"){
    echo "Senha correta! Seja bem-vindo!";
}
else{
    //redirecionar
   header('Location: postlogin.php?senha=erro');
}
?>