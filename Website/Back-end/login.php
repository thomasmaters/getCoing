<?php
	include 'connect_db.php';
	
	function login()
	{
		if (session_status() === PHP_SESSION_NONE) session_start();

		if(isset($_POST['user']) && isset($_POST['psw']) && isset($_SESSION['user']) == false &&
			!empty($_POST['user']) && !empty($_POST['psw'])){
			if(!preg_match('/[^a-zA-Z]+/', $_POST['user'])){
				$info = getConnectionInfo();
				$conn = new PDO($info[0],$info[1],$info[2]);
				if($conn != false)
				{
					$stmt = $conn->prepare("SELECT * FROM user WHERE username = '".$_POST['user']."'");
					$stmt->execute(); 
					$row = $stmt->fetch();
					if(isset($_SESSION['user']))
					{
						echo 'false';
					}
					if($row['password'] == $_POST['psw'] && $row['username'] == $_POST['user'])
					{
						$_SESSION['user'] = $_POST['user'];
						echo 'true';
						return;
					}
					else
					{
						echo 'false';
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