<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produto_model extends CI_Model {

  public function __construct() {
    $this->load->database(); // se !autoload
  }

  public function get_produtos($categoria = null) {
    $this->db->order_by('nome', 'ASC');
    if ($categoria === null) {
      $query = $this->db->get('produto');
      return $query->result_array();
    }
    $query = $this->db->get_where('produto', array('categoria' => $categoria));
    return $query->result_array();
  }

  public function get_produto($id, $campo = '*') {//seleciona campo do produto q desejar
    $this->db->select($campo);
    $query = $this->db->get_where('produto', array('id' => $id));
    if($campo == '*')
      return $query->result_array();
    else
      return $query->result_array()[0][$campo];
  }

  public function insere_produto($nome, $valorP, $valorM, $valorG, $valorF, $categoria) {
    $dados = array('nome' => $nome, 'valorPequena' => $valorP, 'valorMedia' => $valorM, 'valorGrande' => $valorG, 'valorFamilia' => $valorF, 'categoria' => $categoria);
    $query = $this->db->insert("produto", $dados);
    return $query->result_array();
  }

}
