<?php

	class  db{

		public $db_host;
		public $db_username;
		public $db_pwd;
		public $db_name;

		function __construct($db_host,$db_username,$db_pwd,$db_name){
			$this->db_host=$db_host;
			$this->db_username=$db_username;
			$this->pwd=$db_pwd;
			$this->db_name=$db_name;
		}

		function conn(){
			$con=mysqli_connect($this->db_host,$this->db_username,$this->pwd,$this->db_name);
			if($con){
				
			}else{
				mysqli_error();
			}
			mysqli_set_charset($con,'utf8');
			return $con;
		}

	}
	





















?>