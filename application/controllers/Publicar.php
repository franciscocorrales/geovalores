<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Publicar extends CI_Controller {
    
	public function __construct(){
		parent::__construct();
               $this->load->helper(array('form','url','date','html'));
               $this->load->library('session');
	}
       
        public function contrucciones()
        {
        	$usuario = $this->session->userdata('idUsuario');
        	
        	if(empty($usuario)){
        		 
        		redirect(base_url().'index.php/Login/adminuser');
        	}
            
            $this->load->helper(array('form','url','date','html'));
            $data["title"] = "GeoValores";
            $data["title_page"] = "Publicar Contrucciones";
            $this->load->view('ventas/contrucciones', $data);
        }
        
        public function terrenos() {
        	$usuario = $this->session->userdata('idUsuario');
        	
        	if(empty($usuario)){
                 
               redirect(base_url().'index.php/Login/adminuser');
            }
            $this->load->helper(array('form','url','date','html'));
            $data["title"] = "GeoValores";
            $data["title_page"] = "Publicar Terrenos";
            $this->load->view('ventas/terrenos', $data);
        }
        
        public function alquileres() {
        	$usuario = $this->session->userdata('idUsuario');
        	
        	if(empty($usuario)){
                 
               redirect(base_url().'index.php/Login/adminuser');
            }
            $this->load->helper(array('form','url','date','html'));
            $data["title"] = "GeoValores";
            $data["title_page"] = "Publicar Alquileres";
            $this->load->view('ventas/alquileres', $data);
        }
        
        public function remates() {
        	$usuario = $this->session->userdata('idUsuario');
        	
        	if(empty($usuario)){
                 
              	redirect(base_url().'index.php/Login/adminuser');
            }
            $this->load->helper(array('form','url','date','html'));
            $data["title"] = "GeoValores";
            $data["title_page"] = "Publicar Remates";
            $this->load->view('ventas/remates', $data);
        }
        
        public function saveInfo() {
            $this->load->model('DBModel');
           	$data = $_POST['data'];
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
                       $array_data[$dat['name']] = $dat['value'];
                }
                $c++;
            }
            $array_publicacion['usuarios_idUsuario'] =  $this->session->userdata('usuario_id');
            $array_publicacion['date_publicacion'] = date('Y-m-d H:i:s');
            
          	$id_publicacion = $this->DBModel->InsertTable('publicaciones',$array_publicacion);
          	$msj = '';
             if($id_publicacion !== 'error'){
                 foreach ($array_data as $key => $value) {
                     $data = array(  
                        'field_value' => $value ,
                        'field_name' => $key,
                        'idPublicacion' => $id_publicacion
                 );
                 try {
                     $this->DBModel->InsertTable('details_fields',$data);                    
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