<?php
try {
	$con = new PDO('mysql:host=localhost;dbname=prog_web',
			  'root', '');
} catch (PDOException $ex) {
	echo $ex->getMessage();
	die();
}
?>
