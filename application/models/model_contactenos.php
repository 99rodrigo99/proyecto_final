<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_inicio extends CI_Model {

	function __construct(){
		parent::__construct();

    }
	
    public function traer_datos_inicio(){
        $sql_datos_inicio="SELECT * FROM inicio";
        $query= $this->db->query($sql_datos_inicio);
        //Cuando el resultado es toda la tabla
        return $query->result();
        //Cuando el resultado es una fila 
        //return $query->row();
    }

}
