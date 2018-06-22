<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cardapio extends CI_Controller {

  /**
   * Página de Cardápio do sistema Pizza Delícia.
   *
   */
  public function index($page = 'cardapio'){
    $this->load->model('produto_model');

    $data['title'] = ucfirst($page);
    $data['produtos'] = array('P' => $this->produto_model->get_produtos('P'),
                              'D' => $this->produto_model->get_produtos('D'),
                              'C' => $this->produto_model->get_produtos('C'),
                              'O' => $this->produto_model->get_produtos('O'));

    $this->load->view('templates/header', $data);
    $this->load->view('pages/'.$page, $data);
    $this->load->view('templates/footer');
  }
}
