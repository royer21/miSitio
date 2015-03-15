<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Departamento extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function all() {
        $query = $this->db->get('departamento');
        return $query->result();
    }

    function allFiltered($field, $value) {
        $this->db->like($field, $value);
        $query = $this->db->get('departamento');
        return $query->result();
    }

    function find($id) {
        $this->db->where('id', $id);
        return $this->db->get('departamento')->row();
    }

    function insert($registro) {
        $this->db->set($registro);
        $this->db->insert('departamento');
    }

    function update($registro) {
        $this->db->set($registro);
        $this->db->where('id', $registro['id']);
        $this->db->update('departamento');
    }

    function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('departamento');
    }

}
