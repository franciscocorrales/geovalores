<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contacto extends CI_Controller {

	function __construct() { 
		parent::__Construct();
		$this->load->library(array('form_validation','email'));
		$this->load->helper(array('url','html'));
       }

function index(){
           $data["dondeestoy"] = "Contacto";
	   $data['title'] = 'Formulario de Contacto'; 
	   $data['msg'] = NULL;
	   
           $this->form_validation->set_rules('name', 'Nombre', 'required|alpha|min_length[3]');
	   $this->form_validation->set_rules('phone', 'Celular', 'required|numeric');
	   $this->form_validation->set_rules('address', 'Ciudad', 'required');
	   $this->form_validation->set_rules('email', 'Email', 'required|valid_email');	
	   $this->form_validation->set_rules('message', 'Mensaje', 'required');	
	   
	   $this->form_validation->set_message('required', 'El campo %s es requerido');
	   $this->form_validation->set_message('valid_email', 'El email no es válido');
          
           $this -> form_validation -> set_error_delimiters('<ul><li>', '</li></ul>');
	   
	   $this->form_validation->set_message('required', 'El campo %s es requerido');
	   $this->form_validation->set_message('valid_email', 'El email no es válido');
          
           $this -> form_validation -> set_error_delimiters('<ul><li>', '</li></ul>');
		
		
	if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('contacto', $data);   

			
		    }else{
		    			
			$name = $this->input->post('name');
			$mobil = $this->input->post('phone');
			$email = $this->input->post('email');
			$message = $this->input->post('message');
			
                        $this->load->library("email");
 
        //configuracion para gmail
        $configGmail = array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.gmail.com',
            'smtp_port' => 465,
            'smtp_user' => 'laqs84@softteca.com',
            'smtp_pass' => 'clave',
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"
        );    
 
        //cargamos la configuración para enviar con gmail
        $this->email->initialize($configGmail);
		// Datos para enviar el correo
			$this->email->from($email);
			$this->email->to('laqs84@softteca.com');
			$this->email->subject('Email enviado GeoValores');				
			$this->email->message($message); 
			
			if($this->email->send()){
			$data["dondeestoy"] = "Contacto";
			$data['title']='Mensaje Enviado';
			$data['msg'] = 'Mensaje enviado a su email';
                        
	                 // echo $this->email->print_debugger(); exit;        					 
		    $this->load->view('contacto', $data);  
			
			 }else{
			    $data['title']='El mensaje no se pudo enviar';
                            $data["dondeestoy"] = "Contacto";
			    $this->load->view('contacto', $data); 
			 
			 } 
						 
           } 
	    } 
    } 
