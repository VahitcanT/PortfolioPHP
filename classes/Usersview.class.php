<?php

	
	class Usersview extends dbh {
		private $id;
		public function __construct(int $id) {
			$this->id = $id;
		}
		
		public function GetAllUsers() {
			

			$sql="select * from users where id!=?;";
			$stmt = $this->connect()->prepare($sql);
			$stmt->execute([$this->id]);

			$rows = array();
			while ($row=$stmt->fetch()) { // For each row
				array_push($rows,$row);
			}
			return $rows;
			
		}
	}