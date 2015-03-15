<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Empleado extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function all() {
        $this->db->select('empleado.* , departamento.descripcion as departamento_descripcion');
        $this->db->from('empleado');
        $this->db->join('departamento', 'empleado.departamento_id = departamento.id', 'left');
       
        $query = $this->db->get();
        return $query->result();
    }

    function allFiltered($field, $value) {
        $this->db->select('empleado.* , departamento.descripcion as departamento_descripcion');
        $this->db->from('empleado');
        $this->db->join('departamento', 'empleado.departamento_id = departamento.id', 'left');

        $this->db->like($field, $value);

        $query = $this->db->get();
        return $query->result();
    }

     function allFiltered_departamento($value) {
        $this->db->select('empleado.* , departamento.descripcion as departamento_descripcion');
        $this->db->from('empleado');
        $this->db->join('departamento', 'empleado.departamento_id = departamento.id', 'left');

        $this->db->like('departamento.descripcion', $value);

        $query = $this->db->get();
        return $query->result();
    }


    function find($id) {
        $this->db->where('id', $id);
        return $this->db->get('empleado')->row();
    }

    function insert($registro) {
        $this->db->set($registro);
        $this->db->insert('empleado');
    }

    function update($registro) {
        $this->db->set($registro);
        $this->db->where('id', $registro['id']);
        $this->db->update('empleado');
    }

    function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('empleado');
    }

}
