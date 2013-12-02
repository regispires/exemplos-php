<?php
require_once ('modelo/pessoa.php');
class pessoa_controlador {

    function lista() {
        $pessoa = new Pessoa();
        $pessoas = $pessoa -> busca();
        require_once ('visao/pessoa_lista.php');
    }

    function deleta() {
        $pessoa = new Pessoa();
        if (isset($_GET['id'])) {
            $pessoa -> setId($_GET['id']);
            $pessoa -> deleta();
        }
        header('Location: index.php?controlador=pessoa&acao=lista');
    }

    function insere() {
        require_once ('visao/pessoa_insere.php');
    }

    function insere_processa() {
        $nome = isset($_POST['nome']) ? $_POST['nome'] : null;
        $fone = isset($_POST['fone']) ? $_POST['fone'] : null;
        $email = isset($_POST['email']) ? $_POST['email'] : null;

        $pessoa = new Pessoa();
        $pessoa -> setNome($nome);
        $pessoa -> setFone($fone);
        $pessoa -> setEmail($email);
        $pessoa -> insere();
        header('Location: index.php?controlador=pessoa&acao=lista');

    }

    function altera() {
        $pessoa = new Pessoa();
        $pessoa -> busca_pessoa($_GET['id']);
        require_once 'visao/pessoa_update.php';
    }

    function altera_processa() {
        $id = isset($_REQUEST['id']) ? $_REQUEST['id'] : null;
        $nome = isset($_POST['nome']) ? $_POST['nome'] : null;
        $fone = isset($_POST['fone']) ? $_POST['fone'] : null;
        $email = isset($_POST['email']) ? $_POST['email'] : null;

        $pessoa = new Pessoa();
        $pessoa -> setId($id);
        $pessoa -> setNome($nome);
        $pessoa -> setFone($fone);
        $pessoa -> setEmail($email);
        $pessoas = $pessoa -> altera($id);
        header('Location: index.php?controlador=pessoa&acao=lista');
    }

}
?>