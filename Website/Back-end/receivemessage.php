<?php
	include 'sendmessage.php';
	function sendMessageToServer()
	{
		echo print_r($_POST);
		if(isset($_POST['originator']) && isset($_POST['body']))
		{
			$info = getConnectionInfo();
			$conn = new PDO($info[0],$info[1],$info[2]);
			if($conn != false)
			{
				$stmt = $conn->prepare("SELECT * FROM user WHERE cellphone = '".$_POST['originator']."'"); 
				$stmt->execute(); 
				$row = $stmt->fetch();
				if(preg_match('/(sell)+/', strtolower($_POST['body']))){$msg = 'Your bitcoins are sold!';}
				if(preg_match('/(buy)+/', strtolower($_POST['body']))){$msg = 'You bought 100 miloen miljard bitcoins!';}
				if(preg_match('/(yomama)+/', strtolower($_POST['body']))){$msg = 'Your moms dick pics have been send!';}
				sendMessageToTelephone($msg,$row['username'],'9973652472');
			}
			echo $_POST['body'];
		}
	}
	sendMessageToServer();
?>