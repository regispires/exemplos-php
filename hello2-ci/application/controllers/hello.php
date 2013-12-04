<?php
class Hello extends CI_Controller {
  function index() {
  	$dados['nome'] = 'João Jonas John';
  	$dados['visao'] = 'hello/index';
  	$this->load->view('layout', $dados);
  }

  function acao() {
  	$this->load->database();
  	$dados['pessoas'] = $this->db->get('pessoas')->result();
  	$dados['visao'] = 'hello/acao';
  	$this->load->view('layout', $dados);
  }

}
?>