<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inici extends CI_Controller {

	function __construct(){
		
		parent::__construct();

		$this->load->helper('url');

		/*Carreguem el fitxer de configuració de la base de dades*/
		$this->load->database();

		/*Carreguem la llibreria grocery CRUD*/
		$this->load->library('grocery_CRUD');
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('inici');
	}

	public function login(){
		
		$this->load->view('login');
	}

	/* Sortida de la pagina recepetes */

	public function _receptes_output($output = null){

		$this->load->view('receptes.php', $output);

	}

	/* Funció receptes */

	public function receptes(){
		$crud = new grocery_CRUD();
		$crud->set_table('recepta');
		$crud->display_as('tipus_recepta_tipus_id', 'Tipus Recepta');
		$crud->set_subject('Recepta');
		$crud->set_relation('tipus_recepta_tipus_id', 'tipus_recepta', 'nom');
		$crud->set_field_upload('imatge','assets/uploads/imatges');
		$output = $crud->render();
		$this->_receptes_output($output);

	}

	public function _usuaris_output($output = null){

		$this->load->view('usuaris.php', $output);

	}

	public function usuaris(){
		$crud = new grocery_CRUD();
		$crud->set_table('usuaris');
		$crud->columns('nom','cognom','username','password');
		$crud->fields('nom','cognom','username','password');
		$crud->required_fields('nom','cognom','username','password');
		$crud->change_field_type('password', 'password');
		$crud->callback_insert(array($this,'encrypt_password_and_insert_callback'));
		$output = $crud->render();
		$this->_usuaris_output($output);

	}

	public function encrypt_password_and_insert_callback($post_array) {
		$this->load->library('encrypt');
		$key = 'super-secret-key';
		$post_array['password'] = $this->encrypt->encode($post_array['password'], $key);
		return $this->db->insert('usuaris',$post_array);;
	}        


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */