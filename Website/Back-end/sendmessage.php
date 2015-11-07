<?php
	include 'connect_db.php';
	if(isset($GET['msg']) && isset($GET['tel']) $$ isset($GET['psw']))
	{
		sendMessageToTelephone($GET['msg'],$GET['tel'],$GET['psw'])
	}
	
	function sendMessageToTelephone(msg,tel,psw)
	{
		//$conn = getConnection();
		/*$sql = 'SELECT name, color, calories FROM fruit ORDER BY name';
		foreach ($conn->query($sql) as $row) {
			print $row['name'] . "\t";
			print $row['color'] . "\t";
			print $row['calories'] . "\n";
		}*/
	}
?>