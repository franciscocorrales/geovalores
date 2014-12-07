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
			$fields= $this->DBModel->selectDetailsPublicacion('details_fields',$id);
			array_unshift($fields, array('field_name'=>'tiempo','field_value'=>$publicacion[0]['tiempo']  ));
			$data["publicacion"] = array_merge ( $fields ,$publicacion );
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
	
	
	
	public function saveInfoEditada() {
		$this->load->model('DBModel');
		$data = $_POST['data'];
		$idPublicacion = $_POST['idPublicacion'];
		$price_old = '';
		foreach ($_FILES["images"]["error"] as $key => $error) {
			if ($error == UPLOAD_ERR_OK) {
				$name = $_FILES["images"]["name"][$key];
				move_uploaded_file( $_FILES["images"]["tmp_name"][$key], "uploads/" . $_FILES['images']['name'][$key]);
			}
		}
		$array_data = array();
		$array_publicacion = array();
		$c=0;
		foreach ( $data as $dat)
		{
			if($dat['name'] == "tipo_categoria" || $dat['name'] == "tiempo")
			{
				$array_publicacion[$dat['name']] =  $dat['value'];
			}
			else
			{
				if($dat['name'] !== "idPublicacion"){
					if($dat['name'] !== "precio-old"){
						$array_data[$dat['name']] = $dat['value'];
					}
					else{
						$price_old = $dat['value'];
					}
					
					
				}
				
			}
			$c++;
		}
		$array_publicacion['usuarios_idUsuario'] =  $this->session->userdata('usuario_id');
		$array_publicacion['date_publicacion'] = date('Y-m-d H:i:s');
	
		$publicacion = $this->DBModel->UpdateTable('publicaciones',$array_publicacion,$idPublicacion );
		$msj = '';
		if($publicacion !== 'error'){
			foreach ($array_data as $key => $value) {
				try {
					if($value == 'precio-colones'){
						
						if($price_old > $key){ //precio mayor se guarda 1
							$this->DBModel->UpdateFieldPublicacion($value,$key, $idPublicacion, 1);
						}
						else if ($price_old < $key) {// precio menor se guarda 0
							$this->DBModel->UpdateFieldPublicacion($value,$key, $idPublicacion, 0);
						}
						else{// se guarda normal
							$this->DBModel->UpdateFieldPublicacion($value,$key, $idPublicacion);
						}
						
					}
					else{
						$this->DBModel->UpdateFieldPublicacion($value,$key, $idPublicacion);
					}
					
				} catch (Exception $exc) {
					$msj = false;
				}
				$msj = true;
			}
		}else{
			echo false;
		}
	
		if($msj == true){
			echo true;
		}else{
			echo false;
		}
	}
	
	
}