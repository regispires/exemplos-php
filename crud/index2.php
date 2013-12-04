<?php require_once('db_conecta.php');
	$stmt = $con->prepare("SELECT * FROM pessoas ");
	$stmt->execute();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
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
	<?php while ($resultado = $stmt->fetch()) { ?>
	<tr>
		<td><?= $resultado['nome'] ?></td>
	   	<td><?= $resultado['fone'] ?></td>
	    <td><?= $resultado['email'] ?></td>
	    <td>
	    <a href="pessoas_altera.php?id=<?= $resultado['id'] ?>">Alterar</a> |
	    <a href="pessoas_deleta.php?id=<?= $resultado['id'] ?>" 
                   onclick="return confirm('Confirma exclusão?')">Remover</a>
	    </td>
    </tr>
	<?php } ?>
</table>
<p><a href="pessoas_insere.php">Insere Pessoa</a></p>
</body>
</html>