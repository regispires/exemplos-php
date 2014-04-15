<?php
	header('Content-type: application/json');
	$data = array(
	    'nome'  => 'João',
	    'fone'  => '8599999999',
	    'email' => 'joao@gmail.com'
	);
	echo json_encode($data);
?>