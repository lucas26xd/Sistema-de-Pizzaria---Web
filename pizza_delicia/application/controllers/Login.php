<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

  /**
   * Página de Login do sistema Pizza Delícia.
   *
   */
  public function index($page = 'login'){
    $data['title'] = ucfirst($page);
    $this->load->view('templates/header', $data);
    $this->load->view('pages/'.$page, $data);
    $this->load->view('templates/footer');
  }
  public function Logar()
	{
    $user = $this->input->post('nome');
    $senha = $this->input->post('senha');
    $this->load->model('cliente_model');

    $clienteID = $this->cliente_model->valida_login($user, $senha);

    $this->session->set_userdata('id', $clienteID);
    $this->session->set_userdata('usuario', $user);
    $this->session->set_userdata('senha', $senha);

		redirect('Login');
	}
  public function EncerrarSessoes()
	{
		$this->session->sess_destroy();
		redirect('Login');
	}
}
