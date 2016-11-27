<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends CI_Controller {
	function __construct()
	{
		// $this->load->library('session');
		parent::__construct();
	}
	
	public function index() {
		$this->load->view('templates/header');
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['email'] = $session_data['email'];
			$this->load->view('welcome', $data);
		}
		else {
			$this->load->view('welcome');
		}
		
		$this->load->view('templates/footer');
	}
		
	public function logout() {
		$this->session->unset_userdata('logged_in');
		session_destroy();
	}
	
	// TODO : CREER D AUTRES CONTROLEURS POUR CES ACTIONS
	public function fruits(){
		$this->load->view('templates/header');
		$this->load->view('fruits');
		$this->load->view('templates/footer');
	}
	
	public function vegetables(){
		$this->load->view('templates/header');
		$this->load->view('vegetables');
		$this->load->view('templates/footer');
	}
}
