<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Departamento extends CI_Controller {

	// Constructor de la clase
	function __construct() {
		parent::__construct();

		$this->load->model('Model_Departamento');
	
    }

	public function index() {
		$data['contenido'] = 'departamento/index';
		$data['titulo'] = 'Departamento';
		$data['query'] = $this->Model_Departamento->all();
		$this->load->view('header', $data);
		$this->load->view('template', $data);
		$this->load->view('footer', $data);	
	}

	public function search() {
		$data['contenido'] = 'departamento/index';
		$data['titulo'] = 'Departamento';
		$value = $this->input->post('buscar');
		$data['query'] = $this->Model_Departamento->allFiltered('departamento.descripcion', $value);
		$this->load->view('header', $data);
		$this->load->view('template', $data);
		$this->load->view('footer', $data);	
	}


	public function create() {
		$data['contenido'] = 'departamento/create';
		$data['titulo'] = 'Crear Departamento';
		
		$this->load->view('header', $data);
		$this->load->view('template', $data);
		$this->load->view('footer', $data);	
	}

	public function insert() {
		$registro = $this->input->post();

			$registro['descripcion'] = ($registro['descripcion']);
			
			$this->Model_Departamento->insert($registro);
			redirect('departamento/index');
        
	}

	public function edit($id) {
		// $id = $this->uri->segment(3);
		$data['contenido'] = 'departamento/edit';
		$data['titulo'] = 'Actualizar Departamento';
		$data['registro'] = $this->Model_Departamento->find($id);
		
		$this->load->view('header', $data);
		$this->load->view('template', $data);
		$this->load->view('footer', $data);	
	}

	public function update() {
		$registro = $this->input->post();

			
			$this->Model_Departamento->update($registro);
			redirect('departamento/index');
		
	}

	public function delete($id) {
		$this->Model_Departamento->delete($id);
		redirect('departamento/index');
	}

}
