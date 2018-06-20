<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sugestao_model extends CI_Model {

  public function get_sugestoes() {
    $this->db->order_by('data', 'DESC');
    $query = $this->db->get('sugestao');
    return $query->result_array();
  }

  public function insere_sugestao($clienteID, $msg) {
    $dados = array('clienteID' => $clienteID, 'msg' => $msg);
    $query = $this->db->insert('sugestao', $dados);
    return $query;
  }

}
