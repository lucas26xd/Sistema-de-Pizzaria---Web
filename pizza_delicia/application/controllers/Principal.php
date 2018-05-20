<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

  /**
   * Página Principal do sistema Pizzaria Delícia.
   *
   */
  public function index($page = 'principal')
  {
    $data['title'] = ucfirst($page);
    $this->load->view('templates/header', $data);
    $this->load->view('pages/'.$page, $data);
    $this->load->view('templates/footer');

    $this->load->model('cliente_model');
    print_r($this->cliente_model->get_clientes('Tadeu'));
  }
}
