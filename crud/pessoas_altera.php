<?php require_once('db_conecta.php');
	$stmt = $con->prepare("SELECT * FROM pessoas where id=:id ");
	$stmt->bindParam(':id', $_REQUEST['id']);
	$stmt->execute();
	$resultado = $stmt->fetch();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Altera Pessoa</title>
</head>
<body>
<h1>Altera Pessoa</h1>
<form action="pessoas_altera_banco.php" method="POST">
<?php require_once('pessoas_form.php'); ?>
</form>
</body>
</html>