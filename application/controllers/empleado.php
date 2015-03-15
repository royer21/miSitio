<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Empleado extends CI_Controller {

	// Constructor de la clase
	function __construct() {
		parent::__construct();

		$this->load->model('Model_Empleado');
	
    }

	public function index() {
		$data['contenido'] = 'empleado/index';
		$data['titulo'] = 'Empleado';
		$data['query'] = $this->Model_Empleado->all();
		$this->load->view('header', $data);
		$this->load->view('template', $data);
		$this->load->view('footer', $data);	
	}

	public function search() {
		$data['contenido'] = 'empleado/index';
		$data['titulo'] = 'Empleado';
		$value = $this->input->post('buscar');
		$data['query'] = $this->Model_Empleado->allFiltered('empleado.nombres', $value);
		$this->load->view('header', $data);
		$this->load->view('template', $data);
		$this->load->view('footer', $data);	
	}

	public function search_departamento() {
		$data['contenido'] = 'empleado/index';
		$data['titulo'] = 'Empleado';
		$value = $this->input->post('departamento');
		$data['query'] = $this->Model_Empleado->allFiltered_departamento($value);
		$this->load->view('header', $data);
		$this->load->view('template', $data);
		$this->load->view('footer', $data);	
	}


	public function create() {
		$data['contenido'] = 'empleado/create';
		$data['titulo'] = 'Crear Usuario';
		
		$this->load->view('header', $data);
		$this->load->view('template', $data);
		$this->load->view('footer', $data);	
	}

	public function insert() {
		$registro = $this->input->post();
		   	
			$registro['codigo'] = ($registro['codigo']); 
			$registro['nombres'] = ($registro['nombres']);
			$registro['apellidos'] = ($registro['apellidos']);
			$registro['sueldo'] = ($registro['sueldo']);
			$registro['cargo'] = ($registro['cargo']);
			$registro['descripcion'] = ($registro['descripcion']);
			$this->Model_Empleado->insert($registro);
			redirect('empleado/index');
        
	}

	public function edit($id) {
		// $id = $this->uri->segment(3);
		$data['contenido'] = 'empleado/edit';
		$data['titulo'] = 'Actualizar Usuario';
		$data['registro'] = $this->Model_Empleado->find($id);
		
		$this->load->view('header', $data);
		$this->load->view('template', $data);
		$this->load->view('footer', $data);	
	}

	public function update() {
		$registro = $this->input->post();

			
			$this->Model_Empleado->update($registro);
			redirect('empleado/index');
		
	}

	public function delete($id) {
		$this->Model_Empleado->delete($id);
		redirect('empleado/index');
	}

}
