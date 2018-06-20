<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

  /**
   * Página de Login do sistema Pizarria Delícia.
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
		$this->session->set_userdata('usuario',$this->input->post('nome'));
    $this->session->set_userdata('senha',$this->input->post('senha'));
		redirect();
	}
  public function EncerrarSessoes()
	{
		$this->session->sess_destroy();
		redirect();
	}
}
