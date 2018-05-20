<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente_model extends CI_Model {

  public function __construct() {
    $this->load->database(); // se !autoload
  }

  public function get_clientes($nome = null) {
    if ($nome === null) {
      $query = $this->db->get('cliente');
      return $query->result_array();
    }
    $query = $this->db->get_where('cliente', array('nome' => $nome));
    return $query->row_array();
  }

}