<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

  /**
   * Página Login do sistema Pizzaria Delícia.
   *
   */
  public function index($page = 'admin')
  {
    $data['title'] = ucfirst($page);
    $this->load->view('templates/head', $data);
    $this->load->view('pages/'.$page, $data);
    $this->load->view('templates/foot');
  }
}
