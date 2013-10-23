<?php 
  include 'funcoes.php'; 
  $n1 = isset($_REQUEST['n1']) ? $_REQUEST['n1'] : '';
  $n2 = isset($_REQUEST['n2']) ? $_REQUEST['n2'] : '';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Resultado</title>
</head>
<body>
<p><?= soma($n1, $n2) ?></p>
<a href="soma2.php">Voltar</a>
</body>
</html>