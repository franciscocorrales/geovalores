<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Publicar extends CI_Controller {
    
	public function __construct(){
		parent::__construct();
               $this->load->helper(array('form','url','date','html'));
               $this->load->model('DBModel');
               $this->load->library('pagination');
	}
	
	public function contrucciones()
	{
		$this->load->helper(array('form','url','date','html'));
		
		
		$config['base_url'] = $base_url().'index.php/Publicadas/contrucciones';
		$config['total_rows'] = 200;
		$config['per_page'] = 20;
		
		$this->pagination->initialize($config);
		
		$data ['paginacion'] = $this->pagination->create_links();
		$data["title"] = "GeoValores";
		$data["title_page"] = "Mis Publicaciones";
		$this->load->view('ventas/contrucciones', $data);
	}
	
	public function terrenos() {
		$this->load->helper(array('form','url','date','html'));
		$data["title"] = "GeoValores";
		$data["title_page"] = "Publicar Terrenos";
		$this->load->view('ventas/terrenos', $data);
	}
	
	public function alquileres() {
		$this->load->helper(array('form','url','date','html'));
		$data["title"] = "GeoValores";
		$data["title_page"] = "Publicar Alquileres";
		$this->load->view('ventas/alquileres', $data);
	}
	
	public function remates() {
		$this->load->helper(array('form','url','date','html'));
		$data["title"] = "GeoValores";
		$data["title_page"] = "Publicar Remates";
		$this->load->view('ventas/remates', $data);
	}
}