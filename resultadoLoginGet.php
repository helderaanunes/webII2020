<?php
//isset verifica se a variavel está "setada"
if (isset($_GET['login']) && $_GET['login']=="helder"
    && isset($_GET['senha']) && $_GET['senha']=="toddynho"){
    echo "Senha correta! Seja bem-vindo!";
}
else{
    echo "Senha incorreta!";
}
?>