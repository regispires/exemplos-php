<?php
class Usuarios extends MY_Controller {

  function __construct() {
    parent::__construct();
  }

  function index($inicio=0) {
    $dados['active_usuarios'] = true;
    $num_linhas_pag = 2;

    // Obtém parâmetros do formulário de busca
    $param = $this->input->post();

    // Obtém dados do modelo
    $this->load->model('Usuario');
    $tot_linhas = $this->Usuario->conta($param['texto']);
    $dados['usuarios'] = $this->Usuario->busca($param['texto'], $num_linhas_pag, $inicio);

    // Configura a paginação
    $this->load->library('pagination');
    // Ver também arquivo config/pagination
    $config['base_url'] = site_url('/usuarios/index');
    $config['total_rows'] = $tot_linhas;
    $config['per_page'] = $num_linhas_pag;
    $this->pagination->initialize($config); 

    $dados['texto'] = $param['texto'];
  	$dados['visao'] = 'usuarios/index';
  	$this->load->view('layout', $dados);
  }

  function insere() {
    $dados['active_usuarios'] = true;
  	$dados['visao'] = 'usuarios/insere';
  	$this->load->view('layout', $dados);
  }

  function insere_processa() {
    $dados = $this->input->post();
    if ($dados['senha']) {
      if ($dados['senha'] == $dados['confirma_senha']) {
        unset($dados['confirma_senha']);
        $dados['senha'] = sha1($dados['senha']);
        $dados['senha'] = sha1($dados['senha']);
        $this->load->model('Usuario');
        $this->Usuario->insere($dados);
        $this->session->set_flashdata('msg','Usuário inserido com sucesso.');
      } else { 
        $this->session->set_flashdata('msg','Problema ao inserir: senha diferente de sua confirmação.');
      }
    } else {
        $this->session->set_flashdata('msg','Problema ao inserir: senha vazia.');
      }
    redirect('usuarios');
  }

  function altera($id) {
    $dados['active_usuarios'] = true;
    $this->load->model('Usuario');
    $usuario = $this->Usuario->busca_usuario($id);
    $dados['usuario'] = $usuario;
    $dados['visao'] = 'usuarios/altera';
    $this->load->view('layout', $dados);
  }

  function altera_processa() {
    $dados = $this->input->post();
    if ($dados['senha'] && $dados['senha'] == $dados['confirma_senha']) {
      unset($dados['confirma_senha']);
      if (strlen($dados['senha']) > 0) {
        $dados['senha'] = sha1($dados['senha']);
      } else {
        unset($dados['senha']);
      }
      $this->load->model('Usuario');
      $this->Usuario->altera($dados);
      $this->session->set_flashdata('msg','Usuário alterado com sucesso.');
    } else {
      $this->session->set_flashdata('msg','Problema ao alterar: senha diferente de sua confirmação.');
    }
    redirect('usuarios');
  }

  function deleta($id) {
    $this->load->model('Usuario');
    $this->Usuario->deleta($id);
    $this->session->set_flashdata('msg','Usuário excluído com sucesso.');
    redirect('usuarios');
  }

}
?>