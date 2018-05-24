<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

  /**
   * Página Principal do sistema Pizzaria Delícia.
   *
   */
  public function index($page = 'principal'){
    session_start();
    @ $login = ucfirst($_POST["login"]);
    @ $senha = ucfirst($_POST["senha"]);
    $this->load->model('cliente_model');

    @ $_SESSION[‘id’] = $this->cliente_model->valida_login($login, $senha);
    //if (@ $_SESSION[‘id’]) {
      $data['title'] = ucfirst($page);
      $this->load->view('templates/header', $data);
      $this->load->view('pages/'.$page, $data);
    //} else {
      //echo "não logado!";
      //$page = "login";
      //$data['title'] = ucfirst($page);
      //$this->load->view('templates/header', $data);
      //$this->load->view('pages/'.$page, $data);
    // exibir página de autenticação
    //}

    $this->load->view('templates/footer');
  }
}
