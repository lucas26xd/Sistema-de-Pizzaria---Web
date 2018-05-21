<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends CI_Controller {

  /**
   * Página de Cadastro do sistema Pizzaria Delícia.
   *
   */
  public function index($page = 'cadastro') {
    @ $nome = ucfirst($_POST["nome"]);
    @ $tel = $_POST["tel"];
    @ $email = $_POST["email"];
    @ $senha = $_POST["senha"];
    @$qtdEnd = $_POST["qtdEnd"];
    $endereco = array();
    for ($i=1; $i <= $qtdEnd; $i++) {
        @ $rua = ucfirst($_POST["rua".$i]);
        @ $num = ucfirst($_POST["num".$i]);
        @ $bairro = ucfirst($_POST["bairro".$i]);
        @ $cidade = ucfirst($_POST["cidade".$i]);
        $endereco[$i-1] = array('rua' => $rua, 'num' => $num, 'bairro' => $bairro, 'cidade' => $cidade);
    }

    $data['cadastrou'] = $nome != null && $tel != null && $email != null && $senha != null;
    if ($data['cadastrou']) {
      $this->load->model('cliente_model');
      $this->cliente_model->insere_cliente($nome, $tel, $email, $senha, $endereco);//insere cliente e seus endereços respectivos
    }

    $data['title'] = ucfirst($page);
    $this->load->view('templates/header', $data);
    $this->load->view('pages/'.$page, $data);
    $this->load->view('templates/footer');
  }
}
