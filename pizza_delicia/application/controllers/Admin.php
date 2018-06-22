<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

  /**
   * Página Admin do sistema Pizza Delícia.
   *
   */
 	public function __construct()
  {
    parent::__construct();
    /*
    $logado = $this->session->userdata("logado");

    if ($logado != 1) {
      //redirect(base_url('admin'));
    }
    */			
  }       

  public function index($page = 'admin')
  {
    if ($this->session->userdata("logado") != 1) {
      //redirect(base_url('admin/login'));
      $this->login();
    } else {
      $this->home();
    }
  }

	public function home($page = 'home')
	{
    if ($this->session->userdata("logado") != 1) {
      //redirect(base_url('admin/login'));
      $this->login();
    } else {    
      $this->load->model('pedido_model');
      $data = array (
        'title' => ucfirst($page),
        'pedidos' => $this->pedido_model->get_pedidos()
      );    
      $data['title'] = ucfirst($page);
      $this->load->view('admin/templates/header', $data);
      $this->load->view('admin/pages/home', $data);
      $this->load->view('admin/templates/footer', $data);
    }
	}

	public function clientes($page = 'cliente', $id = null)
	{
    if ($this->session->userdata("logado") != 1) {
      redirect(base_url('admin/login'));
      //$this->login();
    } else {    
      $this->load->model('cliente_model');
      $data = array (
        'title' => ucfirst($page),
        'clientes' => $this->cliente_model->get_clientes($id)
      );
      $this->load->view('admin/templates/header', $data);
      $this->load->view('admin/pages/cliente', $data);
      //$this->load->view('admin/templates/footer', $data);
    }
	}

	public function produtos($page = 'produto', $id = null)
	{
    if ($this->session->userdata("logado") != 1) {
      redirect(base_url('admin/login'));
      //$this->login();
    } else {    
      $this->load->model('produto_model');
      $data = array (
        'title' => ucfirst($page),
        'produtos' => $this->produto_model->get_produtos($id)
      );
      $this->load->view('admin/templates/header', $data);
      $this->load->view('admin/pages/produto', $data);
      $this->load->view('admin/templates/footer', $data);
    }
	}    

  public function login($page = 'admin')
  {
    $data['title'] = ucfirst($page);
    $this->load->view('templates/head', $data);
    $this->load->view('admin/pages/'.$page, $data);
    $this->load->view('templates/foot');
  }

	public function logar()
  {		
		$user = $this->input->post("login");
		$pass = sha1($this->input->post("senha"));
    
    $this->load->model('usuario_model');
    $usuarioID = $this->usuario_model->valida_login($user, $pass);
		
		if ($usuarioID) {
			$this->session->set_userdata('logado', 1);
      $this->session->set_userdata('id', $usuarioID);
      $this->session->set_userdata('usuario', $user);
      $this->session->set_userdata('senha', $pass);
      redirect(base_url('admin/home'));
		} else {
			//$data['erro'] = "Usuário/Senha incorretos";
      //show_404();
			//redirect(base_url('login'));
      //$this->load->view('pages/admin', $data);
      $this->login();
		}
	}

	/* Aqui eu destruo a variável logado na sessão e redireciono para a url base.
	 * Como esta variável não existe mais, o usuário será direcionado novamente para a tela de login.
	 */
	public function logout()
  {
		$this->session->unset_userdata("logado");
		$this->session->unset_userdata("id");
    $this->session->unset_userdata("usuario");
    $this->session->unset_userdata("senha");    
    $this->session->sess_destroy();
		redirect(base_url('admin'));
	}  
}
