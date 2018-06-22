<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente_model extends CI_Model {

  var $table = 'cliente';

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

  public function get_enderecos($clienteID) {
    $query = $this->db->get_where('endereco', array('clienteID' => $clienteID));
    return $query->result_array();
  }

  public function valida_login($login, $senha) {
    $query = $this->db->get_where('cliente', array('email' => $login, 'senha' => sha1($senha)));
    $query = $query->row_array();
    if(count($query) > 0){//se login e senha estão corretos
      $this->db->where('id', $query['id']);
      $this->db->update('cliente', array('lastVisita' => "default"));//atualiza ultima visita
      return $query['id'];
    }else{
      return 0;
    }
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

  public function altera_cliente($nome, $tel, $email, $senha, $endereco) {
    $dados = array('nome' => $nome, 'telefone' => $tel, 'email' => $email, 'senha' => sha1($senha));
    $this->db->where('id',$this->session->userdata('id'));
    $query = $this->db->update("cliente", $dados);

    return $query;
  }


  /********** CRUD AJAX **********/

  public function get_all_books()
  {
    $this->db->from('cliente');
    $query = $this->db->get();
    return $query->result();
  }

  public function get_by_id($id)
	{
		$this->db->from($this->table);
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->row();
	}
  
	public function cliente_add($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	public function cliente_update($where, $data)
	{
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}

	public function delete_by_id($id)
	{
		$this->db->where('id', $id);
		$this->db->delete($this->table);
	}
  
}
