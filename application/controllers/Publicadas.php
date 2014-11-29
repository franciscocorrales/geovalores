<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Publicadas extends CI_Controller {
    
	public function __construct(){
		parent::__construct();
               $this->load->helper(array('form','url','date','html'));
               $this->load->model('DBModel');
               $this->load->library('session');
	}
	
	public function publicacion()
	{
		$idUsuario =  $this->session->userdata('usuario');
		if(!empty($idUsuario)){
			
			$this->load->helper(array('form','url','date','html'));
			$data["title"] = "GeoValores";
			$data["title_page"] = "Mis Publicaciones";
			$data["publicaciones"] = $this->DBModel->selectPublicaciones('publicaciones',12);
			$this->load->view('misVentas/contrucciones', $data);
		}
		
	}
	
	
}