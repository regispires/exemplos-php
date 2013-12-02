<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Listagem de Pessoas</title>
</head>
<body>
<h1>Listagem de Pessoas</h1>
    <table>
    <thead>
        <tr>
        <th>Nome</th>
        <th>Telefone</th>
        <th>E-Mail</th>
        <th>Ações</th>
    </tr>

    </thead>

    <?php foreach ($pessoas as $pessoa) { ?>
    <tbody>
    <tr>
        <td><?= $pessoa -> getNome() ?></td>
        <td><?= $pessoa -> getFone() ?></td>
        <td><?= $pessoa -> getEmail() ?></td>
        <td>
        <a href="index.php?controlador=pessoa&acao=altera&id=<?= $pessoa -> getId() ?>">Alterar</a> |
        <a href="index.php?controlador=pessoa&acao=deleta&id=<?= $pessoa -> getId() ?>" onclick="return confirm('Confirma exclusão?')">Remover</a>
        </td>
    </tr>
    </tbody>
    <?php } ?>

</table>
<p><a href="index.php?controlador=pessoa&acao=insere">Insere Pessoa</a></p>

</body>
</html>
