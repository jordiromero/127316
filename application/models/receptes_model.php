<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*Model Receptes*/

class Receptes_model extends CI_Model {

	public function __construct(){
		
		parent::__construct();

		

		
	}

	public function inserta_usuari($mail, $nom, $cognom, $usuari,$password){

		$data = array(
			'email' => $mail,
			'nom' => $nom,
			'cognom' => $cognom,
			'username' => $usuari,
			'password' => $password);

		return $this->db->insert('usuaris', $data);

	}
	
}