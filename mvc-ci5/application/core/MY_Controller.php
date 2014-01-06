<?php
class MY_Controller extends CI_Controller {

	function __construct() {
	    parent::__construct();
	    $this->load->library('session');
        $usuario = $this->session->userdata('usuario');
        if ($usuario == null) {
        	redirect('/login');
        }
	}
}
?>