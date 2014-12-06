<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
		$this->load->model('LoginModel');
                $this->load->library(array('session','form_validation'));
                $this->load->helper(array('form','url','date','html'));
		
    }
	
	
	
	public function new_user()
	{
	
         $nick = $_POST['username'];
         $clave = $_POST['password'];
        
 
        if (empty($nick) || empty($clave))
        {
        redirect(base_url().'index.php/Inicio/index');
        }
        else
        {
            $nom = $_POST['username'];

            $pass = sha1($_POST['password']);
            //comprobamos si existen en la base de datos enviando los datos al modelo
            $login = $this->LoginModel->login_user($nom, $pass);
            if ($login)
            {
                foreach ( $login as $key => $dat)
            {
                if($key == 'nombre')
                { $user =  $dat; } 
                
                if($key == 'idUsuario')
                { $user_id =  $dat; } 
                
                
                
            }
            
                $this->session->set_userdata('usuario_name',$user); 
                $this->session->set_userdata('usuario_id',$user_id); 
                redirect(base_url().'index.php/Login/adminuser');

            }
        }
        }
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url().'index.php/Login/adminuser');
	}
        
        public function adminuser()
	{
		
		$title['title'] = 'Bienvenido Administrador';
		$this->load->view('admin',$title);
	}
}
