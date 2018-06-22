<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller {

  /**
   * Página Cliente do sistema Pizza Delícia.
   *
   */
  public function __construct()
  {
    parent::__construct();
    $this->load->model('cliente_model');
  }

  public function index($page = 'cliente', $id = null)
  {
    $data = array (
      'title' => ucfirst($page),
      'clientes' => $this->cliente_model->get_clientes($id)
    );

    $this->load->view('templates/header', $data);
    $this->load->view('pages/'.$page, $data);
    $this->load->view('templates/footer');
  }


  /********** CRUD AJAX **********/

	public function cliente_add()
  {
    $data = array(
      'nome' => $this->input->post('cliente_nome'),
      'telefone' => $this->input->post('cliente_telefone'),
      'email' => $this->input->post('cliente_email'),
      'senha' => sha1( $this->input->post('cliente_senha') )
    );
    $insert = $this->cliente_model->cliente_add($data);
    echo json_encode(array("status" => TRUE));
  }
    
	public function ajax_edit($id)
	{
    $data = $this->cliente_model->get_by_id($id);
    echo json_encode($data);
	}

	public function cliente_update()
	{
		$data = array(
      'nome' => $this->input->post('cliente_nome'),
      'telefone' => $this->input->post('cliente_telefone'),
      'email' => $this->input->post('cliente_email'),
      'senha' => sha1( $this->input->post('cliente_senha') )
    );
		$this->cliente_model->cliente_update(array('id' => $this->input->post('cliente_id')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function cliente_delete($id)
	{
		$this->cliente_model->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}

}
