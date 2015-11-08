<?php
	include 'connect_db.php';
	function sendMessageToServer()
	{
		if(isset($_POST['originator']) && isset($_POST['body']))
		{
			$info = getConnectionInfo();
			$conn = new PDO($info[0],$info[1],$info[2]);
			if($conn != false)
			{
				$stmt = $conn->prepare("SELECT * FROM user WHERE cellphone = '".$_POST['originator']."'"); 
				$stmt->execute(); 
				$row = $stmt->fetch();
			}
			echo $_POST['body'];
		}
	}
?>