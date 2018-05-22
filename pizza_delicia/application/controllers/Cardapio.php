<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cardapio extends CI_Controller {

  /**
   * Página de Cardápio do sistema Pizarria Delícia.
   *
   */
  public function index($page = 'cardapio')
  {
    $data['title'] = ucfirst($page);
    $this->load->view('templates/header', $data);
    $this->load->view('pages/'.$page, $data);
    $this->load->view('templates/footer');
  }
}