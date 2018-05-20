<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends CI_Controller {

  /**
   * Página de Cadastro do sistema Pizzaria Delícia.
   *
   */
  public function index($page = 'cadastro') {
    @ $nome = $_POST["nome"];
    @ $tel = $_POST["tel"];
    @ $email = $_POST["email"];
    @ $senha = $_POST["senha"];

    $data['cadastrou'] = $nome != null && $tel != null && $email != null && $senha != null;
    if ($data['cadastrou']) {
      $this->load->model('cliente_model');
      $this->cliente_model->insere_cliente($nome, $tel, $email, $senha);
    }

    $data['title'] = ucfirst($page);
    $this->load->view('templates/header', $data);
    $this->load->view('pages/'.$page, $data);
    $this->load->view('templates/footer');
  }
}
