<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="POST" action="resultadoLoginPost.php">
            <?php
            if (isset($_GET['senha']) && $_GET['senha'] == "erro") {
                echo" <div style='color:red'>
                Senha ou login estão incorretos!
            </div>";
            }
            ?>
            <div>
                <label for="login">Login:</label>
                <input type="text" id="login" name="login" />
            </div>
            <div>
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha"/>
            </div>
            <input type="submit" value="logar"/>
        </form>
    </body>
</html>
