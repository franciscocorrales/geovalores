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
                        $this->session->set_flashdata('usuario',TRUE);
			return $query->row();
                        
		}else{
			$this->session->set_flashdata('usuario_incorrecto','Los datos introducidos son incorrectos');
			redirect(base_url(),'refresh');
		}
	}
}
