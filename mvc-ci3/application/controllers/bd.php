<?php
class Bd extends CI_Controller {

  function index() {
  	$dados['visao'] = 'bd/index';
  	$this->load->view('layout', $dados);
  }

  function gera() { 
    $this->load->helper('file');
    $sql = read_file("bd/bd.sql");
    $sqls = explode(';', $sql);
    array_pop($sqls);
     
    $this->load->database();
    $this->db->trans_start();
    foreach($sqls as $statement){
      $statment = $statement . ";";
      $this->db->query($statement); 
    }
    $this->db->trans_complete();
    redirect('pessoas');
  }

}
?>