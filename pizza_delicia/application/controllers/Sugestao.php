<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sugestao extends CI_Controller {

  /**
   * Página de Sugestões do sistema Pizzaria Delícia.
   *
   */
  public function index($page = 'sugestao'){
    session_start();
    @ $msg = ucfirst($_POST["msg"]);
    if (@ $_SESSION[‘logado’] && isset($msg)) {
      $data['enviou'] = true;
    } else {
      echo "não logado!";
      $data['enviou'] = false;
    // exibir página de autenticação
    }
    $data['title'] = ucfirst($page);
    $this->load->view('templates/header', $data);
    $this->load->view('pages/'.$page, $data);
    $this->load->view('templates/footer');
  }
}
