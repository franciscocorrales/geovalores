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
		$idUsuario =  $this->session->userdata('idUsuario');
		if(!empty($idUsuario)){
			
			$this->load->helper(array('form','url','date','html'));
			$data["title"] = "GeoValores";
			$data["title_page"] = "Mis Publicaciones";
			$data["publicaciones"] = $this->DBModel->selectPublicaciones('publicaciones',$this->session->userdata('idUsuario'));
			$this->load->view('misVentas/publicaciones', $data);
		}
		else {
			redirect(base_url().'index.php/Login/adminuser');
		}
		
	}
	
	
	public function editar($id)
	{
		$idUsuario =  $this->session->userdata('idUsuario');
		if(!empty($idUsuario)){
				
			$this->load->helper(array('form','url','date','html'));
			$data["title"] = "GeoValores";
			$data["title_page"] = "Mis Publicaciones";
			$publicacion =  $this->DBModel->selectPublicacion('publicaciones',$id);
			$data["publicacion"] = array_merge ( $this->DBModel->selectDetailsPublicacion('details_fields',$id) ,$publicacion[0] );
			if($publicacion[0]['tipo_categoria'] == "remate"){
				$this->load->view('misVentas/editar-remate', $data);
			}else{
				$this->load->view('misVentas/editar', $data);
			}
		}
		else {
			redirect(base_url().'index.php/Login/adminuser');
		}
		
	}
    
    public function favorito()
	{
		$idUsuario =  $this->session->userdata('idUsuario');
		if(!empty($idUsuario)){
			
			$this->load->helper(array('form','url','date','html'));
			$data["title"] = "GeoValores";
			$data["title_page"] = "Mis Favoritos";
			$data["publicaciones"] = $this->DBModel->selectJoinPublicaciones('publicaciones','publicaciones_marcadas',$this->session->userdata('idUsuario'));
			$this->load->view('misVentas/favoritos', $data);
		}
		else{
			redirect(base_url().'index.php/Login/adminuser');
		}
		
	}
	
	
}