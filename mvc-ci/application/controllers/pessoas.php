<?php
class Pessoas extends CI_Controller {

  function index() {
    $this->load->model('Pessoa');
  	$dados['pessoas'] = $this->Pessoa->busca();
  	$dados['visao'] = 'pessoas/index';
  	$this->load->view('layout', $dados);
  }

  function insere() {
  	$dados['visao'] = 'pessoas/insere';
  	$this->load->view('layout', $dados);
  }

  function insere_processa() {
    $dados = $this->input->post();
    $this->load->model('Pessoa');
    $this->Pessoa->insere($dados);
    redirect('pessoas');
  }

  function altera($id) {
    $this->load->model('Pessoa');
    $pessoa = $this->Pessoa->busca_pessoa($id);
    $dados['pessoa'] = $pessoa;
    $dados['visao'] = 'pessoas/altera';
    $this->load->view('layout', $dados);
  }

  function altera_processa() {
    $dados = $this->input->post();
    $this->load->model('Pessoa');
    $this->Pessoa->altera($dados);
    redirect('pessoas');
  }

  function deleta($id) {
    $this->load->model('Pessoa');
    $this->Pessoa->deleta($id);
    redirect('pessoas');
  }

}
?>