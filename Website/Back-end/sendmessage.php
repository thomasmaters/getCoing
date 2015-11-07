<?php
	include 'connect_db.php';
	include 'messagebird.php';
	
	if(isset($_GET['msg']) && isset($_GET['user']) && isset($_GET['psw']))
	{
		sendMessageToTelephone($_GET['msg'],$_GET['user'],$_GET['psw']);
	}

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
				sendMessage('Mooieheader','Uw bidcoin',(int)$row['cellphone']);
			}
		}
	}
?>