<?php
class Pessoa {
    private $id, $nome, $fone, $email;

    function Pessoa() {
    }

    function getId() {
        return $this -> id;
    }

    function getNome() {
        return $this -> nome;
    }

    function getFone() {
        return $this -> fone;
    }

    function getEmail() {
        return $this -> email;
    }

    function setId($id) {
        $this -> id = $id;
    }

    function setNome($nome) {
        $this -> nome = $nome;
    }

    function setFone($fone) {
        $this -> fone = $fone;
    }

    function setEmail($email) {
        $this -> email = $email;
    }

    function busca() {
        require_once ('modelo/db_conecta.php');
        $stmt = $con -> prepare("SELECT * FROM pessoas ");
        $stmt -> execute();
        $resultados = $stmt -> fetchAll();
        $pessoas = array();
        foreach ($resultados as $item) {
            $pessoa = new Pessoa();
            $pessoa -> setId($item['id']);
            $pessoa -> setNome($item['nome']);
            $pessoa -> setFone($item['fone']);
            $pessoa -> setEmail($item['email']);
            array_push($pessoas, $pessoa);
        }
        return $pessoas;
    }

    function insere() {

        require_once ('modelo/db_conecta.php');
        try {
            $sql = "INSERT INTO pessoas (nome,fone,email)
                VALUES (:nome,:fone,:email) ";
            $stmt = $con -> prepare($sql);
            $stmt -> bindParam(':nome', $this -> getNome());
            $stmt -> bindParam(':fone', $this -> getFone());
            $stmt -> bindParam(':email', $this -> getEmail());
            $stmt -> execute();

        } catch (Exception $error) {
            throw $error;
        }
    }

    function deleta() {
        require_once ('modelo/db_conecta.php');
        try {
            $sql = 'DELETE FROM pessoas WHERE id=:id';
            $stmt = $con -> prepare($sql);
            $stmt -> bindParam(':id', $this -> getId());
            $stmt -> execute();
        } catch (Exception $error) {
            throw $error;
        }
    }

    function altera($id) {
        require_once ('modelo/db_conecta.php');
        try {
            $sql = "UPDATE pessoas SET nome=:nome,
                fone=:fone, email=:email
                WHERE id=$id";
            $stmt = $con -> prepare($sql);
            $stmt -> bindParam(':nome', $this -> getNome());
            $stmt -> bindParam(':fone', $this -> getFone());
            $stmt -> bindParam(':email', $this -> getEmail());
            $stmt -> execute();
        } catch (Exception $error) {
            throw $error;
        }
    }

    function busca_pessoa($id) {
        require_once ('modelo/db_conecta.php');
        $stmt = $con -> prepare("SELECT * FROM pessoas where id=:id ");
        $stmt -> bindParam(':id', $id);
        $stmt -> execute();
        $resultado = $stmt -> fetch();
        $this -> setId($resultado['id']);
        $this -> setNome($resultado['nome']);
        $this -> setFone($resultado['fone']);
        $this -> setEmail($resultado['email']);
    }

}
?>

