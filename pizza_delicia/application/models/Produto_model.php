<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produto_model extends CI_Model {

  public function __construct() {
    $this->load->database(); // se !autoload
  }

  public function get_produtos($categoria = null) {
    if ($categoria === null) {
      $query = $this->db->get('produto');
      return $query->result_array();
    }
    $query = $this->db->get_where('produto', array('categoria' => $categoria));
    return $query->result_array();
  }

  public function insere_produto($nome, $valorP, $valorM, $valorG, $valorF, $categoria) {
    $dados = array('nome' => $nome, 'valorPequena' => $valorP, 'valorMedia' => $valorM, 'valorGrande' => $valorG, 'valorFamilia' => $valorF, 'categoria' => $categoria);
    $query = $this->db->insert("produto", $dados);
    return $query->result_array();
  }

}
