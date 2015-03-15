<?php if (!defined('BASEPATH')) exit('No permitir el acceso directo al script');

// Validaciones para el modelo de usuarios (login, cambio clave, CRUD Usuario)
class AgendaLib {

	function __construct() {
		$this->CI = & get_instance(); // Esto para acceder a la instancia que carga la librería

		$this->CI->load->model('Model_Agenda');
    }

    public function norep($registro) {
        $this->CI->db->where('name',$registro['name']);
        $query =$this->CI->db->get('agenda');

        if($query->num_rows() > 0 AND (!isset($registro['id']) OR ($registro['id'] != $query->row('id')))){
            return FALSE;
        }
        else{
            return TRUE;
        }
    } 



     public function findByAgendaUsuarioId($usuario_id) {
        $this->CI->db->where('usuario_id', $usuario_id);
        return $this->CI->db->get('agenda')->row();
    }

}


 
/*
 public function findByAgendaAndUsuario($menu_id, $perfil_id) {
        $this->CI->db->where('menu_id', $menu_id);
        $this->CI->db->where('perfil_id', $perfil_id);
        return $this->CI->db->get('agenda')->row();
    }
*/