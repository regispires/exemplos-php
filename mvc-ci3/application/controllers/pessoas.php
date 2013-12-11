<?php
class Pessoas extends CI_Controller {

  function index($inicio=0) {
    $num_linhas_pag = 2;

    // Obtém parâmetros do formulário de busca
    $param = $this->input->post();

    // Obtém dados do modelo
    $this->load->model('Pessoa');
    $tot_linhas = $this->Pessoa->conta($param['texto']);
    $dados['pessoas'] = $this->Pessoa->busca($param['texto'], $num_linhas_pag, $inicio);

    // Configura a paginação
    $this->load->library('pagination');
    // Ver também arquivo config/pagination
    $config['base_url'] = site_url('/pessoas/index');
    $config['total_rows'] = $tot_linhas;
    $config['per_page'] = $num_linhas_pag;
    $this->pagination->initialize($config); 

    $dados['texto'] = $param['texto'];
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