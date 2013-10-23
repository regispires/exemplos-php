<?php 
  include 'funcoes.php'; 
  //$n1 = isset($_REQUEST['n1']) ? $_REQUEST['n1'] : '';
  //$n2 = isset($_REQUEST['n2']) ? $_REQUEST['n2'] : '';
  $n1 = ''; $n2 = '';
  if (isset($_REQUEST['n1'])) {
  	$n1 = $_REQUEST['n1'];
  }
  if (isset($_REQUEST['n2'])) {
  	$n2 = $_REQUEST['n2'];
  }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Soma</title>
</head>
<body>
<form action="soma.php">

<input type="text" name="n1" placeholder="Digite um número" 
       value="<?= $n1 ?>" />

<input type="text" name="n2" placeholder="Digite outro número"  
       value="<?= $n2 ?>"/>

<input type="submit"/>
<input type="reset"/>
</form>
<p><?= soma($n1, $n2) ?>
</p>
</body>
</html>