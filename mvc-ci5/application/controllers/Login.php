<?php
class Login extends CI_Controller {

  function __construct() {
    parent::__construct();
    $this->load->library('session');
  }

  function index() {
    $this->session->unset_userdata('usuario');
    $this->load->view('login/index');
  }

  function logar() {
    $dados = $this->input->post();
    // A senha eh 12345
    $this->load->model('Usuario');
    $perfil = $this->Usuario->autentica($dados['usuario'], $dados['senha']);
    
    if ($perfil != null) {
      $this->session->set_userdata('usuario', $dados['usuario']);
      $this->session->set_userdata('perfil', $perfil);
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