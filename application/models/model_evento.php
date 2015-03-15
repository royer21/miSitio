 <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Evento extends CI_Model {

	function __construct() {
		parent::__construct();

    }

    function guardar($datos) {
      	$this->db->insert('evento',$datos);
    }

    function verTodo(){
    	$query=$this->db->get('evento');
    	if($query->num_rows()>0){
    		return $query;
    	}else{
    		return FALSE;
    	}
    }

    function verReg($year){

        // verificar $year

        if ($year == '') {
            return FALSE;
        }

        //Select * from evento where fecha like '$año-%'

        $this->db->like('fecha', $year, 'after');
        $query = $this->db->get('evento');

        return $query;
                                         
//        $query=$this->db->
//        if($query->num_rows()>0){
//            return $query;
//        }else{
//            return FALSE;
//        }
    }

    function allFiltered($value2) {
        $this->db->like('procedencia', $value2);
        $query = $this->db->get('evento');
        return $query;
    }
}
