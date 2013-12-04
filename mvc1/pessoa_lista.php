<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>Listagem de Pessoas</title>
</head>
<body>
<h1>Listagem de Pessoas</h1>
<table border="1" cellpadding="0" cellspacing="0">
	<tr>
		<th>Nome</th>
		<th>Telefone</th>
		<th>E-Mail</th>
		<th>Ações</th>
	</tr>
	<?php foreach ($pessoas as $pessoa) { ?>
	<tr>
		<td><?= $pessoa->getNome()  ?></td>
	   	<td><?= $pessoa->getFone()  ?></td>
	    <td><?= $pessoa->getEmail() ?></td>
	    <td>
	    <a href="index.php?controlador=pessoa&acao=altera&id=<?= $pessoa->getId() ?>">Alterar</a> |
	    <a href="index.php?controlador=pessoa&acao=deleta&id=<?= $pessoa->getId() ?>" onclick="return confirm('Confirma exclusão?')">Remover</a>
	    </td>
    </tr>
	<?php } ?>
</table>
<p><a href="index.php?controlador=pessoa&acao=insere">Insere Pessoa</a></p>
</body>
</html>
