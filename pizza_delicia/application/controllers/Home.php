<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

  /**
   * Página Home do sistema Pizza Delícia.
   *
   */
 	public function __construct()
  {
    parent::__construct();
    $this->load->model('cliente_model');	
  }
	public function index($page = 'home')
	{
    $data['title'] = ucfirst($page);
    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/pages/home', $data);
    $this->load->view('admin/templates/footer', $data);
	}

	public function cliente($page = 'cliente', $id = null)
	{
    $data = array (
      'title' => ucfirst($page),
      'clientes' => $this->cliente_model->get_clientes($id)
    );
    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/pages/cliente', $data);
    //$this->load->view('admin/templates/footer', $data);
	}  
  
}
