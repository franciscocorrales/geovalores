<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
    
	public function __construct(){
		parent::__construct();
               
	}


	public function register()
	{
		$this->load->helper('html');
		$title["title"] = "GeoValores";
		$this->load->view('register/register', $title);
	}
        
        public function saveUser()
        {
           $this->load->model('DBModel');
           if (isset($_POST['txtName']) && isset($_POST['txtApellidos'])  && isset($_POST['txtTelefono'])  && isset($_POST['txtDireccion'])  && isset($_POST['txtPass']) && isset($_POST['txtNotificacion']) && isset($_POST['txtCorreo'])) {
                $data = array(
                    'nombre' => $_POST['txtName'] ,
                    'apellidos' => $_POST['txtApellidos'] ,
                    'telefono' => $_POST['txtTelefono'],
                    'direccion' => $_POST['txtDireccion'],
                    'pass' => base64_encode($_POST['txtPass']),
                    'correo' =>  $_POST['txtCorreo']
                 );
                
                 $result = $this->DBModel->InsertTable('usuarios',$data);
                 if($result == 'successful'){
                     echo true;
                 }else{
                     echo false;
                 }
            }
        }


}


/* End of file welcome.php */
/* Location: ./application/controllers/Welcome.php */