<?php
require_once('pessoa.php');
class pessoa_controlador {

	function lista() {
		$pessoa = new Pessoa();
		$pessoas = $pessoa->busca();
		require_once('pessoa_lista.php');
	}

}
?>
