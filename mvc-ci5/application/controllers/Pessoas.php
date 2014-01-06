<?php
class Pessoas extends MY_Controller {

  function __construct() {
    parent::__construct();
  }

  function index($inicio=0) {
    $dados['active_pessoas'] = true;
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
    $dados['active_pessoas'] = true;
  	$dados['visao'] = 'pessoas/insere';
  	$this->load->view('layout', $dados);
  }

  function insere_processa() {
    $dados = $this->input->post();
    $this->load->model('Pessoa');
    $this->Pessoa->insere($dados);
    $this->session->set_flashdata('msg','Pessoa inserida com sucesso.');
    redirect('pessoas');
  }

  function altera($id) {
    $dados['active_pessoas'] = true;
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
    $this->session->set_flashdata('msg','Pessoa alterada com sucesso.');
    redirect('pessoas');
  }

  function deleta($id) {
    $this->load->model('Pessoa');
    $this->Pessoa->deleta($id);
    $this->session->set_flashdata('msg','Pessoa excluída com sucesso.');
    redirect('pessoas');
  }

}
?>