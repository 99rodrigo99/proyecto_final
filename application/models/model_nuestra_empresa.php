<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_nuestra_empresa extends CI_Model {

	function __construct(){
		parent::__construct();

    }
	
    public function traer_datos_nuestra_empresa(){
        $sql_datos_nuestra_empresa="SELECT * FROM nuestra_empresa";
        $query= $this->db->query($sql_datos_nuestra_empresa);
        //Cuando el resultado es toda la tabla
        return $query->result();
        //Cuando el resultado es una fila 
        //return $query->row();
    }

    public function insertar_datos($datos){
        $this->db->insert('nuestra_empresa',$datos);
        return $this->db->insert_id();
    }


}
