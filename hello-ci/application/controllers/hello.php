<?php
class Hello extends CI_Controller {
  function index() {
  	$dados['nome'] = 'João Jonas John';
  	$this->load->view('hello/index', $dados);
  }

  function acao() {
  	$this->load->view('hello/acao');
  }

}
?>