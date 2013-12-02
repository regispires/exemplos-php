<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Insere Pessoa</title>
    </head>
    <body>
        <h2>Cadastro de pessoas</h2>
        <form action="index.php" method="POST" >
            <input type="hidden" name="acao" value="insere_processa" />
            <?php require_once('pessoa_form.php'); ?>
        </form>
    </body>
</html>