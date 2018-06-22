<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pedido_model extends CI_Model {

  public function get_itens_pedidos($clienteID) {//retorna todos os pedidos que estão no carrinho atrelados aquele cliente
    $this->db->select('id');
    $query = $this->db->get_where('pedido', array('clienteID' => $clienteID, 'status' => "No CARRINHO"));
    if(count($query->result_array()) > 0){
      $query = $query->result_array()[0];
      $query = $this->db->get_where('itensPedido', array('pedidoID' => $query['id']));
    }
    return $query->result_array();
  }

  public function get_pedido($id, $campo = '*') {//seleciona campo do produto q desejar
    $this->db->select($campo);
    $query = $this->db->get_where('pedido', array('id' => $id));
    if($campo == '*')
      return $query->result_array();
    else
      return $query->result_array()[0][$campo];
  }

  public function get_lastpedido_cliente($clienteID) {//seleciona o pedido q tá no carrinho do cliente logado
    $this->db->select_max('id');
    $query = $this->db->get_where('pedido', array('clienteID' => $clienteID, 'status' => "No CARRINHO"));
    if(count($query->result_array()) > 0)
      return $query->result_array()[0]['id'];
    else
      return 0;
  }

  public function insere_pedido($clienteID) {//apenas cria o pedido com valor zerado atrelando ao cliente
    $dados = array('clienteID' => $clienteID);
    $query = $this->db->insert('pedido', $dados);
    return $query->result_array();
  }

  public function insere_item_pedido($pedidoID, $prodID, $valorP) {//apenas cria o pedido com valor zerado atrelando ao cliente
    $dados = array('pedidoID' => $pedidoID, 'prodID' => $prodID, 'qtd' => 1, 'valor' => $valorP);
    $query = $this->db->insert('itensPedido', $dados);
  }

  public function atualiza_valor_pedido($id, $valor) {
    $dados = array('valor' => $valor);
    $this->db->where('id', $id);
    $this->db->update('pedido', $dados);
  }

  public function atualiza_status_pedido($id, $status) {
    $dados = array('status' => $status);
    $this->db->where('id', $id);
    $this->db->update('pedido', $dados);
  }

  public function atualiza_item_pedido($id, $qtd, $valor) {
    $dados = array('qtd' => $qtd, 'valor' => $valor);
    $this->db->where('id', $id);
    $this->db->update('itensPedido', $dados);
  }

  public function get_item_pedido($id, $campo = '*') {//seleciona campo do produto q desejar
    $this->db->select($campo);
    $query = $this->db->get_where('itensPedido', array('id' => $id));
    if($campo == '*')
      return $query->result_array();
    else
      return $query->result_array()[0][$campo];
  }

  public function apaga_item_pedido($id){
    $this->db->delete('itensPedido', array('id' => $id));
  }

  public function get_pedidos($id = null) {
    $this->db->order_by('id', 'ASC');
    if ($id === null) {
      $query = $this->db->get('pedido');
      return $query->result_array();
    }
    $query = $this->db->get_where('pedido', array('id' => $id));
    return $query->result_array();
  }
  
}
