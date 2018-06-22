<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sugestao extends CI_Controller {

  /**
   * Página de Sugestões do sistema Pizza Delícia.
   *
   */
  public function index($page = 'sugestao'){

    $data['title'] = ucfirst($page);
    $data['deubom'] = 0;
    $this->load->view('templates/header', $data);
    $this->load->view('pages/'.$page, $data);
    $this->load->view('templates/footer');
  }
  public function inserir_sugestao($page = 'sugestao'){
    $msg = $this->input->post('msg');
    $id = $this->session->userdata('id');

    $this->load->model('sugestao_model');

    $this->sugestao_model->insere_sugestao($id, $msg);

//    redirect('Principal');
    $data['title'] = ucfirst($page);
    $data['deubom'] = 1;
    $this->load->view('templates/header', $data);
    $this->load->view('pages/'.$page, $data);
    $this->load->view('templates/footer');
  }
}
