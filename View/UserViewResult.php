<!DOCTYPE html>
<html>
    <head>
        <title>Cadastro de usuário efetuado</title>
    </head>
    <body>
        <h1>Resultado</h1><p>
            <?php
                if(isset($_GET['user']) && isset($_GET['mail'])){
                   echo '<br>Usuario:' . $_GET['user']. 
                        '<br>E-mail:' . $_GET['mail']; 
                }
            ?>
    </body>
</html>

