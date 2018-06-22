<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {

  public function __construct() {
    $this->load->database(); // se !autoload
  }
/*
  public function get_usuarios($id = null) {
    $this->db->order_by('nome', 'ASC');
    if ($id === null) {
      $query = $this->db->get('usuario');
      return $query->result_array();
    }
    $query = $this->db->get_where('usuario', array('id' => $id));
    return $query->result_array();
  }

  public function get_enderecos($usuarioID) {
    $query = $this->db->get_where('endereco', array('usuarioID' => $usuarioID));
    return $query->result_array();
  }
*/
  public function valida_login($user, $pass) {
    $query = $this->db->get_where('usuario', array('login' => $user, 'senha' => $pass));
    $query = $query->result_array();
    if (count($query) > 0) { //se login e senha estão corretos
      $this->db->where('id', $query[0]['id']);
      $this->db->update('usuario', array('lastVisita' => "default")); //atualiza ultima visita
      return $query[0]['id'];
    } else {
      return 0;
    }
  }
/*
  public function insere_usuario($nome, $tel, $email, $senha, $endereco) {
    $dados = array('nome' => $nome, 'telefone' => $tel, 'email' => $email, 'senha' => sha1($senha));
    $query = $this->db->insert("usuario", $dados);
    if ($query) {
      $usuarioID = $this->db->insert_id(); //pega o id do ultimo insert
      for ($i = 0; $i < count($endereco); $i++) { // colocando no array para ser atrelado o usuario, na tabela endereco
        $endereco[$i]['usuarioID'] = $usuarioID;
      }
      $query = $this->db->insert_batch("endereco", $endereco); //add mais de registro de uma vez
    }
    return $query;
  }

  public function altera_usuario($nome, $tel, $email, $senha, $endereco) {
    $dados = array('nome' => $nome, 'telefone' => $tel, 'email' => $email, 'senha' => sha1($senha));
    $this->db->where('id',$this->session->userdata('id'));
    $query = $this->db->update("usuario", $dados);

    return $query;
  }
*/
}
