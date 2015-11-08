<?php
	include 'connect_db.php';
	function register()
	{
		if(	isset($_GET['user']) && isset($_GET['psw']) && isset($_GET['phone']) && isset($_GET['bitcoin']) && isset($_GET['email']) &&
			!empty($_GET['user']) && !empty($_GET['psw']) && !empty($_GET['phone']) && !empty($_GET['bitcoin']) && !empty($_GET['email']))
			{
				if(!preg_match('/[a-zA-Z]+/', $_GET['user'])){echo '{"response": "INVALID_USERNAME"}';}
				if(preg_match('/[[:punct:]]/', $_GET['bitcoin'])){echo '{"response": "INVALID_BITCOIN"}';}
				if(!filter_var($_GET['email'], FILTER_VALIDATE_EMAIL)){echo '{"response": "INVALID_EMAIL"}';}
				$phone = $_GET['phone'];
				preg_replace('/(-)+/', '', $phone);
				preg_replace('/[a-zA-Z]+/', '', $phone);
				preg_replace('/[(\+)+/', '', $phone);
				if(!preg_match('/[0-9]{10,20}+/', $phone)){echo '{"response": "INVALID_PHONE"}';}
				
				$info = getConnectionInfo();
				$conn = new PDO($info[0],$info[1],$info[2]);
				if($conn != false)
				{
					echo 'helemaal mooi';
					$stmt = $conn->prepare("INSERT INTO user(username,password,cellphone,email) VALUES('".$_GET['user']."','".$_GET['psw']."','".$phone."','".$_GET['email']."') "); 
					$stmt->execute(); 
				}
			}
	}
	register();
?>