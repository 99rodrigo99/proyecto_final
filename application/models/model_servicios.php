<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_servicios extends CI_Model {

	function __construct(){
		parent::__construct();

    }
	
    public function traer_datos_servicos(){
        $sql_datos_servicios="SELECT * FROM servicios";
        $query= $this->db->query($sql_datos_servicios);
        //Cuando el resultado es toda la tabla
        return $query->result();
        //Cuando el resultado es una fila 
        //return $query->row();
    }

    public function insertar_servicios($datos){
        $this->db->insert('servicios',$datos);
        return $this->db->insert_id();
    }

}
