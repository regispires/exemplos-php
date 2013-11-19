<?php
if (! isset($_GET['controlador'])) {
	echo 'Controlador não informado.';
	echo 'Tente acessar: http://localhost/mvc1/index.php?controlador=pessoa&acao=lista';
	die;
}
if (! isset($_GET['acao'])) {
	echo 'Ação não informada.';
	echo 'Tente acessar: http://localhost/mvc1/index.php?controlador=pessoa&acao=lista';
		die;
}
$controlador = $_GET['controlador'] . '_controlador'; 
require_once($controlador . '.php');
$acao = $_GET['acao'];
$obj = new $controlador;
call_user_func(array($obj, $acao));
?>
