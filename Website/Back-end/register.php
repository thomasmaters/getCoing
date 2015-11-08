<?php
	include 'connect_db.php';
	function register()
	{
		if(	isset($_POST['user']) && isset($_POST['psw']) && isset($_POST['phone']) && isset($_POST['bitcoin']) && isset($_POST['email']) &&
			!empty($_POST['user']) && !empty($_POST['psw']) && !empty($_POST['phone']) && !empty($_POST['bitcoin']) && !empty($_POST['email']))
			{
				if(!preg_match('/[a-zA-Z]+/', $_POST['user'])){echo '{"response": "INVALID_USERNAME"}';}
				if(preg_match('/[[:punct:]]/', $_POST['bitcoin'])){echo '{"response": "INVALID_BITCOIN"}';}
				if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){echo '{"response": "INVALID_EMAIL"}';}
				$phone = $_POST['phone'];
				preg_replace('/(-)+/', '', $phone);
				preg_replace('/[a-zA-Z]+/', '', $phone);
				preg_replace('/[(\+)]+/', '', $phone);
				if(!preg_match('/[0-9]{10,20}+/', $phone)){echo '{"response": "INVALID_PHONE"}';}
				
				$info = getConnectionInfo();
				$conn = new PDO($info[0],$info[1],$info[2]);
				if($conn != false)
				{
					echo 'true';
					$stmt = $conn->prepare("INSERT INTO user(id,username,password,cellphone,email) VALUES(59,'".$_POST['user']."','".$_POST['psw']."','".$phone."','".$_POST['email']."') "); 
					$stmt->execute();
					return;
				}
			}
	}
	echo 'false';
	register();
?>