<?php
class Pessoa extends CI_Model {
    function Pessoa() {
        $this->load->database();
    }

    function busca() {
        return $this->db->get('pessoas')->result();
    }

    function insere($dados) {
        $this->db->insert('pessoas', $dados);
    }

    function deleta($id) {
        $this->db->where('id', $id);
        $this->db->delete('pessoas');
    }

    function altera($dados) {
        $this->db->where('id', $dados['id']);
        $this->db->update('pessoas', $dados);
    }

    function busca_pessoa($id) {
        $this->db->where('id', $id);
        return $this->db->get('pessoas')->row();
    }

}
?>