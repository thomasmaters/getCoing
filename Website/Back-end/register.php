<?php

	include 'connect_db.php';

	function register()
	{

		if(	isset($_POST['user']) && isset($_POST['psw']) && isset($_POST['phone']) && isset($_POST['email']))

			{

				if(!preg_match('/[a-zA-Z]+/', $_POST['user'])){echo '{"response": "INVALID_USERNAME"}';}

				if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){echo '{"response": "INVALID_EMAIL"}';}

				$phone = $_POST['phone'];

				preg_replace('/(-)+/', '', $phone);

				preg_replace('/[a-zA-Z]+/', '', $phone);

				preg_replace('/[(\+)]+/', '', $phone);

				if(!preg_match('/[0-9]{10,20}+/', $phone)){echo '{"response": "INVALID_PHONE"}';}

				

				$info = getConnectionInfo();

				$conn = new PDO($info[0],$info[1],$info[2]);
				echo 'deel3';


				if($conn != false)

				{
					echo 'deel4';

					

					$stmt = $conn->prepare("INSERT INTO `user`(`username`, `password`, `email`, `cellphone`) VALUES ('".$_POST['user']."','".$_POST['psw']."','".$phone."','".$_POST['email']."') "); 

					if($stmt->execute()) {
					echo 'true';
					} else {
					echo 'false';
					}
					return;

				}

			}

		echo 'false';

	}

	register();

?>