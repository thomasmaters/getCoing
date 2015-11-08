<?php
	include 'connect_db.php';
	include 'messagebird.php';
	
	if(isset($_GET['msg']) && isset($_GET['user']) && isset($_GET['psw']) && !empty($_GET['msg']) && !empty($_GET['user']) && !empty($_GET['psw']))
	{
		sendMessageToTelephone($_GET['msg'],$_GET['user'],$_GET['psw']);
	}
	else if(!isset($_GET['msg'])){echo '{"response": "NO_MESSAGE"}';}
	else if(!isset($_GET['user'])){echo '{"response": "NO_USER"}';}
	else if(!isset($_GET['psw'])){echo '{"response": "NO_PASSWORD"}';}
	else{echo '{"response": "UNKNOWN_ERROR"}';}

	function sendMessageToTelephone($msg,$user,$psw)
	{
		$info = getConnectionInfo();
		$conn = new PDO($info[0],$info[1],$info[2]);
		if($conn != false)
		{
			$stmt = $conn->prepare("SELECT * FROM user WHERE username = '".$user."'"); 
			$stmt->execute(); 
			$row = $stmt->fetch();

			if($row['password'] == $psw)
			{
				sendMessage('getCoing',$msg,(int)$row['cellphone']);
			}
		}
	}
?>