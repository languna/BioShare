<?php
	class User extends CI_Model{
		public $UserID;
		public $UserEmail;
		public $UserLastname;
		public $UserFirstname;
		public $UserNickname;
		public $UserAddress;
		public $UserZip;
		public $UserCity;
		public $UserPhone;
		public $UserPhone2;
		public $password;
		public $UserComment="";
		public $UserEnabled=1;
	
		public function __construct(){
			parent::__construct();
		}
		
		public function insert(){
			$this->db->insert("Users",$this);
		}
		public function update(){
			
		}
		public function delete(){
			
		}
		
		function login($email, $password)
		{
			$this->db->select('UserId, UserEmail, password');
			$this->db->from('users');
			$this->db->where('UserEmail', $email);
			$this->db->where('password', $password);		 
			$query = $this->db->get();		 
			if($query -> num_rows() == 1)
			{
				return $query->result()[0];
			}
			else
			{
				return false;
			}	
		}
	}
?>