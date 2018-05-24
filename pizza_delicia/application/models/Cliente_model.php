<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente_model extends CI_Model {

  public function __construct() {
    $this->load->database(); // se !autoload
  }

  public function get_clientes($id = null) {
    $this->db->order_by('nome', 'ASC');
    if ($id === null) {
      $query = $this->db->get('cliente');
      return $query->result_array();
    }
    $query = $this->db->get_where('cliente', array('id' => $id));
    return $query->result_array();
  }

  public function insere_cliente($nome, $tel, $email, $senha, $endereco) {
    $dados = array('nome' => $nome, 'telefone' => $tel, 'email' => $email, 'senha' => sha1($senha));
    $query = $this->db->insert("cliente", $dados);
    if ($query) {
      $clienteID = $this->db->insert_id(); //pega o id do ultimo insert
      for ($i = 0; $i < count($endereco); $i++) { // colocando no array para ser atrelado o cliente, na tabela endereco
        $endereco[$i]['clienteID'] = $clienteID;
      }
      $query = $this->db->insert_batch("endereco", $endereco); //add mais de registro de uma vez
    }
    return $query;
  }

}
