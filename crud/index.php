<?php require_once('db_conecta.php');
	$stmt = $con->prepare("SELECT * FROM pessoas ");
	$stmt->execute();
	$resultado = $stmt->fetchAll();
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
	<?php for ($i=0; $i < sizeof($resultado) ; $i++) { ?>
	<tr>
		<td><?= $resultado[$i]['nome'] ?></td>
	   	<td><?= $resultado[$i]['fone'] ?></td>
	    <td><?= $resultado[$i]['email'] ?></td>
	    <td>
	    <a href="pessoas_altera.php?id=<?= $resultado[$i]['id'] ?>">Alterar</a> |
	    <a href="pessoas_deleta.php?id=<?= $resultado[$i]['id'] ?>" onclick="return confirm('Confirma exclusão?')">Remover</a>
	    </td>
    </tr>
	<?php } ?>
</table>
<p><a href="pessoas_insere.php">Insere Pessoa</a></p>
</body>
</html>
