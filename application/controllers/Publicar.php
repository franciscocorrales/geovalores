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
        public function guardarimagenes (){
       
       $status = "";
    $msg = "";
    $file_element_name = 'userfile';
     
    $temp_array;
            foreach($_FILES['userfile'] as $key => $val)
            {
                $i = 0;
                foreach($val as $new_key)
                {
                    $temp_array[$i][$key] = $new_key;
                    $i++;
                }
                //
            }

            $i = 0;
            foreach($temp_array as $key => $val)
            {
                $_FILES['userfile'.$i] = $val;
                $i++;
            }

            #clear the original array;
            unset($_FILES['userfile']);

            $config['upload_path'] = './files/';
            $config['allowed_types'] = 'gif|jpg|png|doc|txt';
            $config['max_size'] = 1024 * 8;
            $config['encrypt_name'] = TRUE;
 
        $this->load->library('upload', $config);
            $count = 1;
            foreach($_FILES as $key => $value)
            {     
                
                if( ! empty($value['name']))
                {
                    
                    if($this->upload->do_upload($key))
                    {                                           
                       $saveimagen = $this->upload->data();
                       $arraynombres['imagen'.$count] = $saveimagen['file_name'];
                     }
                }
                $count++;
            }
            $this->session->set_userdata('imagenes',$arraynombres);
    echo json_encode(array('status' => $status, 'msg' => $msg));
        }

        public function saveInfo() {
            $this->load->model('DBModel');
            $data = $_POST['data'];
            $array_data = array();
            $array_publicacion = array();
            $imagenes = $this->session->userdata('imagenes');
            if(!empty($imagenes)){
            foreach ( $imagenes as $key => $dat)
            {
                
                $array_data[$key] = $dat;
                
                
            }
            }
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
                echo $id_publicacion;
            	
            }else{
            	echo false;
            }
        }
}