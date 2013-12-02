<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Altera Pessoa</title>
    </head>
    <body>
        <h2>Alterar Pessoa</h2>
        <form action="index.php" method="POST" >
            <input type="hidden" name="acao" value="altera_processa" />
            <?php require_once('pessoa_form.php'); ?>
        </form>
    </body>
</html>