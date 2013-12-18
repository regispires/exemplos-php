<?php
class Login extends CI_Controller {

  function __construct() {
    parent::__construct();
    $this->load->library('session');
  }

  function index() {
    $this->session->unset_userdata('usuario');
    $dados['visao'] = 'login/index';
    $this->load->view('layout', $dados);
  }

  function logar() {
    $dados = $this->input->post();
    // A senha eh 12345
    if ($dados['usuario'] == 'regis' && sha1($dados['senha']) == '8cb2237d0679ca88db6464eac60da96345513964') {
      $this->session->set_userdata('usuario', $dados['usuario']);
      $this->session->set_flashdata('msg','Login efetuado com sucesso.');
      redirect('/');
    } else {
      $this->session->set_flashdata('msg','Usuário ou senha inválidos.');
      redirect('/login');
    }
  }

  function logout() {
    $this->session->unset_userdata('usuario');
    redirect('/');
  }

}
?>