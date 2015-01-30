<?php

/*Model Receptes*/

class Receptes_Model extends CI_Model {

	function __construct(){
		
		parent::__construct();

		/*Carreguem el fitxer de configuració de la base de dades*/
		$this->load->database();

		
	}

	public function inserta_usuari($mail, $nom, $cognom, $usuari,$password){

		$data = array(
			'mail' => $mail
			'nom' => $nom
			'cognom' => $cognom
			'usuari' => $usuari
			'password' => $password
			);
		return $this->db->insert('usuaris', $data);

	}
	
}