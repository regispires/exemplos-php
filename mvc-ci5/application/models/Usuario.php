<?php
class Usuario extends CI_Model {
    function __construct() {
        $this->load->database();
    }

    function conta($texto) {
        $this->db->like('nome', $texto); 
        $this->db->or_like('login', $texto); 
        return $this->db->count_all_results('usuarios');
    }

    function autentica($login,$senha) {
        $this->db->where('login', $login); 
        $this->db->where('senha', sha1($senha));
        $usuario = $this->db->get('usuarios')->row();
        return ($usuario != null ? $usuario->perfil : '');
    }

    function busca($texto,$qtd,$inicio) {
        $this->db->like('nome', $texto);
        $this->db->or_like('login', $texto); 
        $this->db->limit($qtd, $inicio);
        return $this->db->get('usuarios')->result();
    }

    function insere($dados) {
        $this->db->insert('usuarios', $dados);
    }

    function deleta($id) {
        $this->db->where('id', $id);
        $this->db->delete('usuarios');
    }

    function altera($dados) {
        $this->db->where('id', $dados['id']);
        $this->db->update('usuarios', $dados);
    }

    function busca_usuario($id) {
        $this->db->where('id', $id);
        return $this->db->get('usuarios')->row();
    }

}
?>