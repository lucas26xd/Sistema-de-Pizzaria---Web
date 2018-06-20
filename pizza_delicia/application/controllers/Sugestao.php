<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sugestao extends CI_Controller {

  /**
   * Página de Sugestões do sistema Pizzaria Delícia.
   *
   */
  public function index($page = 'sugestao'){
  
    $data['title'] = ucfirst($page);
    $this->load->view('templates/header', $data);
    $this->load->view('pages/'.$page, $data);
    $this->load->view('templates/footer');
  }
}
