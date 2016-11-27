<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subscribe extends CI_Controller {
	public function index() {
		$this->load->view('templates/header');
		$this->load->view('subscribe');
		$this->load->view('templates/footer');
	}
	
	public function inscription(){
		$email=$_REQUEST["email"];
		$email2=$_REQUEST["email2"];
		$lastname=$_REQUEST["lastname"];
		$firstname=$_REQUEST["firstname"];
		$address=$_REQUEST["address"];
		$zip=$_REQUEST["zip"];
		$city=$_REQUEST["city"];
		$phone=$_REQUEST["phone"];
		$pwd=$_REQUEST["pwd"];
		$pwd2=$_REQUEST["pwd2"];
		$vat=$_REQUEST["vat"];
		
		$user=new user();
		$user->UserEmail =$email;
		$user->UserLastname =$lastname;
		$user->UserFirstname =$firstname;
		$user->UserNickname ="";
		$user->UserAddress =$address;
		$user->UserZip =$zip;
		$user->UserCity =$city;
		$user->UserPhone =$phone;
		$user->password=$pwd;
		
		$user ->insert();
		$data=array();
		$data['message']="Your account is successfully created, please check your emails.";
		$this->load->view('home',$data);
	}
}
