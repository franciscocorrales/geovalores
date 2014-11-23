<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
		$this->load->model('LoginModel');
        $this->load->library(array('session','form_validation'));
        $this->load->helper(array('form','url','date','html'));
		$this->load->database('default');
    }
	
	
	
	public function new_user()
	{
	$this->form_validation->set_rules('username', 'nombre', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'password', 'trim|required|xss_clean');
 
       $this->form_validation->set_message('required', 'El %s es requerido');
 
        if ($this->form_validation->run() == FALSE)
        {
        $this->index();
        }
        else
        {
        $nom = $this->input->post('username');
       
        $pass = sha1($this->input->post('password'));
        //comprobamos si existen en la base de datos enviando los datos al modelo
        $login = $this->LoginModel->login_user($nom, $pass);
        if ($login)
        {
             redirect(base_url().'index.php/Login/adminuser');
        
	}
        }
        }
	public function logout()
	{
		$this->session->sess_destroy();
		$this->index();
	}
        
        public function adminuser()
	{
		
		$title['title'] = 'Bienvenido Administrador';
		$this->load->view('admin',$title);
	}
}
