<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
		$this->load->model('model_roles');
		$this->load->model('model_usuarios');
    }

	public function index()
	{
		$this->load->view('layouts/Dashboard_header');
		$this->load->view('dashboard/Dashboard');
		$this->load->view('layouts/Dashboard_footer');

	}

	public function admin_inicio()
	{
		$datos_inicio['datos_inicio'] = $this->model_inicio->traer_datos_inicio();

		$this->load->view('layouts/Dashboard_header');
		$this->load->view('dashboard/Inicio',$datos_inicio);
		$this->load->view('layouts/Dashboard_footer');

	}

	public function admin_nuestra_empresa()
	{
		$datos_nuestra_empresa['datos_nuestra_empresa'] = $this->model_nuestra_empresa->traer_datos_nuestra_empresa();

		$this->load->view('layouts/Dashboard_header');
		$this->load->view('dashboard/Nuestra_empresa',$datos_nuestra_empresa);
		$this->load->view('layouts/Dashboard_footer');

	}

	public function admin_servicios()
	{
		$datos_servicios['datos_servicios'] = $this->model_servicios->traer_datos_servicos();

		$this->load->view('layouts/Dashboard_header');
		$this->load->view('dashboard/Servicios',$datos_servicios);
		$this->load->view('layouts/Dashboard_footer');

	}

	public function admin_contactenos()
	{
		$this->load->view('layouts/Dashboard_header');
		$this->load->view('dashboard/Contactenos');
		$this->load->view('layouts/Dashboard_footer');

	}

	public function admin_roles()
	{
		$datos_roles['datos_roles'] = $this->model_roles->traer_datos_roles();

		$this->load->view('layouts/Dashboard_header');
		$this->load->view('dashboard/Roles',$datos_roles);
		$this->load->view('layouts/Dashboard_footer');

	}

	public function admin_usuarios()
	{
		$datos_usuarios['datos_usuarios'] = $this->model_usuarios->traer_datos_usuarios();

		$this->load->view('layouts/Dashboard_header');
		$this->load->view('dashboard/Usuarios',$datos_usuarios);
		$this->load->view('layouts/Dashboard_footer');

	}

	public function agregar_servicio(){
		$icon=$this->input->post('icon');
		$Titulo=$this->input->post('Titulo');
		$Descripcion=$this->input->post('Descripcion');
		
		$datos_servicio = array(
		'icon'           =>$icon,
		'Titulo'         =>$Titulo,
		'Descripcion'    =>$Descripcion,
		);

		$id=$this->model_servicios->insertar_servicios($datos_servicio);	

		redirect(base_url().'dashboard/admin_servicios');
	}

	public function agregar_inicio(){
		$Titulo_H1=$this->input->post('Titulo_H1');
		$Parrafos=$this->input->post('Parrafos');
		
		$datos_inicio = array(
		'Titulo_H1'        =>$Titulo_H1,
		'Parrafos'         =>$Parrafos,
		);

		$id=$this->model_inicio->insertar_datos($datos_inicio);	

		redirect(base_url().'dashboard/admin_inicio');
	}

	public function agregar_nuestra_empresa(){
		$Parrafo_1=$this->input->post('Parrafo_1');
		$Lista_1=$this->input->post('Lista_1');
		$Parrafo_2=$this->input->post('Parrafo_2');
		
		$datos_nuestra_empresa = array(
		'Parrafo_1'       =>$Parrafo_1,
		'Lista_1'         =>$Lista_1,
		'Parrafo_2'       =>$Parrafo_2,
		);

		$id=$this->model_nuestra_empresa->insertar_datos($datos_nuestra_empresa);	

		redirect(base_url().'dashboard/admin_nuestra_empresa');
	}
	

	public function agregar_roles(){
		$roles=$this->input->post('roles');
		
		$datos_roles = array(
		'roles'        =>$roles,
		);

		$id=$this->model_roles->insertar_datos($datos_roles);	

		redirect(base_url().'dashboard/admin_roles');
	}

	public function agregar_usuarios(){
		$nombres=$this->input->post('nombres');
		$apellidos=$this->input->post('apellidos');
		$identificacion=$this->input->post('identificacion');
		$correo=$this->input->post('correo');
		$telefono=$this->input->post('telefono');
		$direccion=$this->input->post('direccion');
		$password=$this->input->post('password');
		
		$datos_usuarios = array(
		'nombres'        =>$nombres,
		'apellidos'      =>$apellidos,
		'identificacion' =>$identificacion,
		'correo'         =>$correo,
		'telefono'         =>$telefono,
		'direccion'      =>$direccion,
		'password'       =>$password,
		);

		$id=$this->model_usuarios->insertar_datos($datos_usuarios);	

		redirect(base_url().'dashboard/admin_usuarios');
	}

}
