<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Publicar extends CI_Controller {
    
	public function __construct(){
		parent::__construct();
               
	}
        
        public function publicar()
	{
		$this->load->helper('html');
		$title["title"] = "GeoValores";
		$this->load->view('ventas/ventas', $title);
	}
        
        public function contrucciones()
        {
            $this->load->helper('html');
            $title["title"] = "GeoValores";
            $this->load->view('ventas/contrucciones', $title);
        }
        
        public function terrenos() {
            $this->load->helper('html');
            $title["title"] = "GeoValores";
            $this->load->view('ventas/terrenos', $title);
        }
        
        public function alquileres() {
            $this->load->helper('html');
            $title["title"] = "GeoValores";
            $this->load->view('ventas/alquileres', $title);
        }
        
        public function remates() {
            $this->load->helper('html');
            $title["title"] = "GeoValores";
            $this->load->view('ventas/remates', $title);
        }
        
        public function saveInfo() {
            $this->load->model('DBModel');
           $data = $_POST['data'];
            $array_data = array();
            $array_publicacion = array();
            $c=0;
            foreach ( $data as $dat)
            {
                if($dat[$c]['name'] == "categoria" || $dat[$c]['name'] == "tiempo")
                {
                        $array_publicacion[$dat[$c]['name']] =  $dat[$c]['value'];
                }
                else
                {
                       $array_data[$dat[$c]['name']] = $dat[$c]['value'];
                }
                $c++;
            }
            echo $array_publicacion;
          $id_publicacion = $this->DBModel->InsertTable('publicaciones',$array_publicacion);

             if($id_publicacion !== 'error'){
                 foreach ($array_data as $key => $value) {
                     $data = array(
                        'idField'  => '',   
                        'field_value' => $value ,
                        'field_name' => $key,
                        'idPublicacion' => $id_publicacion
                 );
                 try {
                     $this->DBModel->InsertTable('details_fields',$data);                    
                 } catch (Exception $exc) {
                     echo false;
                 }
                 echo true;
                 }
            }else{
                echo false;
            }
            
        }
}