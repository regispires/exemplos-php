<?php
class Pessoa {
	private $id, $nome, $fone, $email;

	function Pessoa() {
	}

	function getId() {
		return $this->id;
	}

	function getNome() {
		return $this->nome;
	}

	function getFone() {
		return $this->fone;
	}

	function getEmail() {
		return $this->email;
	}

	function setId($id) {
		$this->id = $id;
	}

	function setNome($nome) {
		$this->nome = $nome;
	}

	function setFone($fone) {
		$this->fone = $fone;
	}

	function setEmail($email) {
		$this->email = $email;
	}

	function busca() {
		require_once('db_conecta.php');
		$stmt = $con->prepare("SELECT * FROM pessoas ");
		$stmt->execute();
		$resultados = $stmt->fetchAll();
		$pessoas = array();
		foreach ($resultados as $item) {
			$pessoa = new Pessoa();
			$pessoa->setId($item['id']);
			$pessoa->setNome($item['nome']);
			$pessoa->setFone($item['fone']);
			$pessoa->setEmail($item['email']);
			array_push($pessoas, $pessoa);
		}
		return $pessoas;		
	}
}
?>
