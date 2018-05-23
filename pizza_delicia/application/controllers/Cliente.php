<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller {

  /**
   * Página Cliente do sistema Pizzaria Delícia.
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
}
