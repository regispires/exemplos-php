<?php
try {
	$con = new PDO('mysql:host=localhost;dbname=prog_web;charset=utf8',
			  'root', '');
} catch (PDOException $ex) {
	echo $ex->getMessage();
	die();
}
?>
