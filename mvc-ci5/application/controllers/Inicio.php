<?php
class Inicio extends MY_Controller {

  function __construct() {
    parent::__construct();
  }

  function index() {
    $dados['active_home'] = true;
  	$dados['visao'] = 'inicio/index';
  	$this->load->view('layout', $dados);
  }

  function sobre() {
    $dados['active_sobre'] = true;
    $dados['visao'] = 'inicio/sobre';
    $this->load->view('layout', $dados);
  }

}
?>