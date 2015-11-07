<?php
	include 'connect_db.php';
	function login()
	{
		if(isset($_GET['user']) && isset($_GET['psw']) && isset($_SESSION["user"]) == false){
			echo 'kaas';
			if(!preg_match('/[^a-zA-Z]+/', $_GET['user'])){
				$info = getConnectionInfo();
				$conn = new PDO($info[0],$info[1],$info[2]);
				if($conn != false)
				{
					$stmt = $conn->prepare("SELECT * FROM user WHERE username = '".$_GET['user']."'"); 
					$stmt->execute(); 
					$row = $stmt->fetch();
					print_r($row);
					if($row['password'] == $_GET['psw'] && $row['username'] == $_GET['user'])
					{
						session_start();
						$_SESSION["user"] = $user;
						echo 'Helemaal mooi';
					}
				}
			}
		}
	}
	login();
?>