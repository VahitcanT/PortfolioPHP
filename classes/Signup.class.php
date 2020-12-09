<?php

include 'dbh.class.php';
	
	class Signup extends dbh {
		
		private $name;
		private $email;
		private $pwd;
		
		function __construct (string $name,string $email,string $pwd){
			
			$this->name = $name;
			$this->email= $email;
			$this->pwd= $pwd;
		
		}
		
		public function signIntoDatabase() : bool {
			$sql = "INSERT INTO `users` (`Name`, `Email`, `Password`) VALUES (?, ?, ?);";
			$stmt = $this->connect()->prepare($sql);
			if($stmt->execute([$this->name,$this->email,$this->pwd])){

				return true;
			}
			return false;
		}
	}