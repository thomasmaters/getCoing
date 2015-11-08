<?php
	include 'connect_db.php';
	
	function login()
	{
		if (session_status() === PHP_SESSION_NONE) session_start();

		if(isset($_GET['user']) && isset($_GET['psw']) && isset($_SESSION['user']) == false &&
			!empty($_GET['user']) && !empty($_GET['psw'])){
			echo 'kaasz';
			if(!preg_match('/[^a-zA-Z]+/', $_GET['user'])){
				$info = getConnectionInfo();
				$conn = new PDO($info[0],$info[1],$info[2]);
				if($conn != false)
				{
					$stmt = $conn->prepare("SELECT * FROM user WHERE username = '".$_GET['user']."'"); 
					$stmt->execute(); 
					$row = $stmt->fetch();
					if(isset($_SESSION['user']))
					{
						echo 'username already set';
					}
					if($row['password'] == $_GET['psw'] && $row['username'] == $_GET['user'])
					{
						$_SESSION['user'] = $_GET['user'];
						echo 'Helemaal mooi';
					}
					else
					{
						echo 'PASS OF USERNAME VERKEERD';
						session_destroy();
					}
				}
			}
		}
		else
		{
			echo 'u bent al ingelogd';
		}
	}
	
	function isLoggedIn()
	{
		return (isset($_SESSION['user']) && !empty($_SESSION['user']));
	}
?>