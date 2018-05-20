<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends CI_Controller {

  /**
   * Página de Cadastro do sistema Pizzaria Delícia.
   *
   */
  public function index($page = 'cadastro')
  {
    $data['title'] = ucfirst($page);
    $this->load->view('templates/header', $data);
    $this->load->view('pages/'.$page, $data);
    $this->load->view('templates/footer');
  }
}
