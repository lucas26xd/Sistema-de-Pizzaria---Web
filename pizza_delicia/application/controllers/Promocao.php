<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Promocao extends CI_Controller {

  /**
   * Página de Promoções do sistema Pizza Delícia.
   *
   */
  public function index($page = 'promocao')
  {
    $data['title'] = ucfirst($page);
    $this->load->view('templates/header', $data);
    $this->load->view('pages/'.$page, $data);
    $this->load->view('templates/footer');
  }
}
