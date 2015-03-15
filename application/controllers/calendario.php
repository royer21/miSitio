<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Calendario extends CI_Controller {

	// Constructor de Clase
	function __construct() {
		parent::__construct();

		//$this->load->model('Model_Agenda');
		$this->load->library('calendar');
	
		
	}

	public function index() {

	
		$data['contenido'] = 'calendario/index';
		$data['titulo'] = 'Inicio';
		$this->load->view('header', $data);
		$this->load->view('template', $data);
		$this->load->view('footer', $data);	
	
	}

}

?>
