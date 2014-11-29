<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 
 */
class LoginModel extends CI_Model {
	
	public function __construct() {
		parent::__construct();
	}
	
	public function login_user($username,$password)
	{
		$this->db->where('nombre',$username);
		$this->db->where('pass',$password);
		$query = $this->db->get('usuarios');
		if($query->num_rows() == 1)
		{
			$usauario = $query->row();
                        $this->session->set_userdata('usuario',$usauario->idUsuario);
			return $usauario;
                        
		}else{
                    $this->session->set_flashdata('usuario_incorrecto','Los datos introducidos son incorrectos');
                    redirect(base_url(),'refresh');
		}
	}
}
