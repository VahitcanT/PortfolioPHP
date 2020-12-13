<?php

	class Login extends dbh {

		private $NameOrEmail;
		private $pwd;

		function __construct(string $NameOrEmail , string $pwd){
			$this->NameOrEmail = $NameOrEmail;
			$this->pwd = $pwd;
		}

		public function CheckCredentials() : bool {
			$sql = 'SELECT * FROM users WHERE Name = ? OR Email = ?;';
			$stmt = $this->connect()->prepare($sql);
			$stmt->execute([$this->NameOrEmail,$this->NameOrEmail]);
			$row = $stmt->fetch();	
			if(password_verify($this->pwd,$row['Password'])) {

				return true;
			}
			return false;
		}
		public function CheckRole()
		{
			$sql = 'SELECT * FROM users WHERE Name = ? OR Email = ?;';
			$stmt = $this->connect()->prepare($sql);
			$stmt->execute([$this->NameOrEmail,$this->NameOrEmail]);
			$row = $stmt->fetch();
			return $row["userLevel"];
		}
		public function CheckInfo()
		{
			$sql = 'SELECT * FROM users WHERE Name = ? OR Email = ?;';
			$stmt = $this->connect()->prepare($sql);
			$stmt->execute([$this->NameOrEmail,$this->NameOrEmail]);
			$row = $stmt->fetch();	
			if(password_verify($this->pwd,$row['Password'])) {

				return $row;
			}
		}
		
	}