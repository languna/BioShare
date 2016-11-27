<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('user','',TRUE);
	}
 
	public function index() {
		$this->getLoginPage();
	}
	
	public function verify() {
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		if (empty($email) && empty($password)) {
			// TODO : Rediriger vers la page LOGIN avec message d'erreur.
			$this->getLoginPage();
			return;
		}
		
		$user = $this->user->login($email, $password);
		if (!$user) {
			$this->getLoginPage();
			return;
		}
		
        $sess_array = array(
			'id' => $user->UserId,
			'email' => $user->UserEmail
		);
		$this->session->set_userdata('logged_in', $sess_array);
		// TODO : NE PAS METTRE L URL ENTIERE
		redirect('http://localhost/BioShareLaetitia/index.php');
	}
	
	private function getLoginPage() {
		$this->load->view('templates/header');
		$this->load->view('login');
		$this->load->view('templates/footer');
	}
}
