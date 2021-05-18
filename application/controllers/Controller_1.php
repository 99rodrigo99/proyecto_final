<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_1 extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct(){
		parent::__construct();
		$this->load->model('model_inicio');
		$this->load->model('model_nuestra_empresa');
		$this->load->model('model_servicios');
	}
	public function index()
	{
		$datos_inicio['datos_inicio'] = $this->model_inicio->traer_datos_inicio();
		$this->layout->view('inicio',$datos_inicio);

	}

	public function servicios()
	{
		$datos_servicios['datos_servicios'] = $this->model_servicios->traer_datos_servicos();
		$this->layout->view('servicios',$datos_servicios);
	}

	public function nuestra_empresa()
	{
		$datos_nuestra_empresa['datos_nuestra_empresa'] = $this->model_nuestra_empresa->traer_datos_nuestra_empresa();
		$this->layout->view('nuestra_empresa',$datos_nuestra_empresa);
	}

	public function contacto()
	{
		$this->layout->view('contacto');
	}
	
}
