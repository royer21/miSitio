<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	// Constructor de Clase
	function __construct() {
		parent::__construct();

		$this->load->library('usuarioLib');
		$this->form_validation->set_message('required', 'Debe ingresar un valor para %s');
		$this->form_validation->set_message('loginok', 'Usuario o clave incorrectos');
		$this->form_validation->set_message('matches', '%s no coincide con %s');
		$this->form_validation->set_message('cambiook', 'No se puede realizar el cambio de clave');
	}

	public function index() {
		$data['contenido'] = 'home/index';
		$data['titulo'] = 'Inicio';
		$this->load->view('header', $data);
		$this->load->view('template', $data);
		$this->load->view('footer', $data);
	}

	public function acerca_de() {
		$data['contenido'] = 'home/acerca_de';
		$data['titulo'] = 'Acerca De';
		$this->load->view('header', $data);
		$this->load->view('template', $data);
		$this->load->view('footer', $data);	
	}

	public function acceso_denegado() {
		$data['contenido'] = 'home/acceso_denegado';
		$data['titulo'] = 'Denegado';
		$this->load->view('header', $data);
		$this->load->view('template', $data);
		$this->load->view('footer', $data);	
	}

	public function ingreso() {
		
		$data['contenido'] = 'home/ingreso';
		$data['titulo'] = 'Ingreso';
		$this->load->view('header', $data);
		$this->load->view('template', $data);
		$this->load->view('footer', $data);	
	}

	public function ingresar() {
		$this->form_validation->set_rules('login', 'Usuario', 'required|callback_loginok');
		$this->form_validation->set_rules('password', 'Clave', 'required');
		if($this->form_validation->run() == FALSE) {
			$this->ingreso();
		}
		else {
			redirect('agenda/index');
		}
		
	}
	
	public function loginok() {
		$login = $this->input->post('login');
		$password = $this->input->post('password');
		//return $this->usuariolib->login($login, md5($password));
		return $this->usuariolib->login($login, ($password));
	}

	public function salir() {
		$this->session->sess_destroy();
		redirect('agenda/index');
	}

	public function cambio_clave() {
		$data['contenido'] = 'home/cambio_clave';
		$data['titulo'] = 'Cambiar Clave';
		$this->load->view('header', $data);
		$this->load->view('template', $data);
		$this->load->view('footer', $data);	
	}

	public function cambiar_clave() {
		$this->form_validation->set_rules('clave_act', 'Clave Actual', 'required|callback_cambiook');
		$this->form_validation->set_rules('clave_new', 'Clave Nueva', 'required|matches[clave_rep]');
		$this->form_validation->set_rules('clave_rep', 'Repita Nueva', 'required');
		if($this->form_validation->run() == FALSE) {
			$this->cambio_clave();
		}
		else {
			redirect('home/index');
		}
	}

	public function cambiook() {
		$act = $this->input->post('clave_act');
		$new = $this->input->post('clave_new');
		return $this->usuariolib->cambiarPWD(md5($act), md5($new));
	}

}
