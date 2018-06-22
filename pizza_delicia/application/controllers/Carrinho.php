<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carrinho extends CI_Controller {

  /**
   * Página de Cadastro do sistema Pizza Delícia.
   *
   */
  public function index($page = 'carrinho') {
    $this->load->model('cliente_model');
    $this->load->model('pedido_model');
    $this->load->model('produto_model');

    if($this->session->has_userdata('id'))
      $idLogado = $this->session->userdata('id');
    else
      $idLogado = 0;

    $data['enderecos'] = $this->cliente_model->get_enderecos($idLogado); //pega enderecos ligados ao cliente passado
    $data['pedidos'] = $this->pedido_model->get_itens_pedidos($idLogado);
    //$data['pedidos'] = array(array('nome' => 'Pizza de Calabresa', 'tamanho' => array('P', 'M', 'G', 'F')), array('nome' => 'Pizza de Fangro', 'tamanho' => array('P', 'M', 'G', 'F')));
    //$data['enderecos'] = array(array('rua' => 'Rua 08 de janeiro', 'numero' => "106", 'bairro' => 'Brasília', 'cidade' => 'Cruz'));

    for($i = 0; $i < count($data['pedidos']); $i++) {//add o indice de nome no pedido para colocar direto na tabela de viewe no carrinho
      $data['pedidos'][$i]['nome'] = $this->produto_model->get_produto($data['pedidos'][$i]['prodID'], 'nome');
    }

    for($i = 0; $i < count($data['pedidos']); $i++) {
      $valorP = $this->produto_model->get_produto($data['pedidos'][$i]['prodID'], 'valorPequena');
      $valorM = $this->produto_model->get_produto($data['pedidos'][$i]['prodID'], 'valorMedia');
      $valorG = $this->produto_model->get_produto($data['pedidos'][$i]['prodID'], 'valorGrande');
      $valorF = $this->produto_model->get_produto($data['pedidos'][$i]['prodID'], 'valorFamilia');

      $val = $data['pedidos'][$i]['valor']/$data['pedidos'][$i]['qtd'];
      if($val == $valorP)
        $data['pedidos'][$i]['TAM'] = "tamP";
      else if($val == $valorM)
        $data['pedidos'][$i]['TAM'] = "tamM";
      else if($val == $valorG)
        $data['pedidos'][$i]['TAM'] = "tamG";
      else if($val == $valorF)
        $data['pedidos'][$i]['TAM'] = "tamF";
    }

    for($i = 0; $i < count($data['pedidos']); $i++) {//add o indice de nome no pedido para colocar direto na tabela de viewe no carrinho
      $cat = $this->produto_model->get_produto($data['pedidos'][$i]['prodID'], 'categoria');
      if($cat == 'P')
        $data['pedidos'][$i]['tamanho'] = array('P', 'M', 'G', 'F');
      else
        $data['pedidos'][$i]['tamanho'] = array('P', 'M');
    }

    $data['title'] = ucfirst($page);
    $this->load->view('templates/header', $data);
    $this->load->view('pages/'.$page, $data);
    $this->load->view('templates/footer');
  }

  public function apagaPedido(){
    $this->load->model('pedido_model');
    $id = $_POST["id"];
    $this->pedido_model->apaga_item_pedido($id);
  }

  public function calculaTotal(){
    $this->load->model('pedido_model');
    $this->load->model('produto_model');

    $id = $this->input->post('id');
    $tam = $this->input->post('tam');
    $qtd = $this->input->post('qtd');

    $prodID = $this->pedido_model->get_item_pedido($id, 'prodID');
    $pedidoID = $this->pedido_model->get_item_pedido($id, 'pedidoID');

    $campo = 'valorPequena';
    if($tam == 'M')
      $campo = 'valorMedia';
    else if($tam == 'G')
      $campo = 'valorGrande';
    else if($tam == 'F')
      $campo = 'valorFamilia';

    $valor = $this->produto_model->get_produto($prodID, $campo);
    $this->pedido_model->atualiza_item_pedido($id, $qtd, $qtd * $valor);
/*
    $valorProduto = $this->pedido_model->get_pedido($pedidoID, 'valor');
    $valorProduto = $valorProduto + ($qtd * $valor);
    $this->pedido_model->atualiza_valor_pedido($pedidoID, $valorProduto);
*/

    echo $qtd * $valor;
  }

  public function cadastra_pedido($prodID){
    $this->load->model('pedido_model');
    $this->load->model('produto_model');

    if($this->session->has_userdata('id'))
      $idLogado = $this->session->userdata('id');
    else
      $idLogado = 0;
    if($idLogado != 0){
      $pedidoID = $this->pedido_model->get_lastpedido_cliente($idLogado);
      if($pedidoID == 0){
        $this->pedido_model->insere_pedido($idLogado);
        $pedidoID = $this->pedido_model->get_lastpedido_cliente($idLogado);
      }
      $valorP = $this->produto_model->get_produto($prodID, 'valorPequena');
      $this->pedido_model->insere_item_pedido($pedidoID, $prodID, $valorP);
    }
    redirect('carrinho');
  }
}
