<?php

include 'dbh.class.php';
	
	class Usersview extends dbh {
		
		public function GetAllUsers() {
			$sql = "SELECT Name FROM users;";
			$stmt = $this->connect()->query($sql);
			while($row = $stmt->fetch())
			{
				echo $row['Name']."<br>";
			}
			
		}
	}