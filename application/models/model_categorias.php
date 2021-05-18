<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_categorias extends CI_Model {

	function __construct(){
		parent::__construct();

    }
	
    public function traer_datos_categorias(){
        $sql_datos_categorias="SELECT * FROM categorias";
        $query= $this->db->query($sql_datos_categorias);
        //Cuando el resultado es toda la tabla
        return $query->result();
        //Cuando el resultado es una fila 
        //return $query->row();
    }

    public function insertar_categorias($datos){
        $this->db->insert('categorias',$datos);
        return $this->db->insert_id();
    }

}
