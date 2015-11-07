<?php
	$servername = "localhost";
	$username = "witherpv_job";
	$password = "flaporen";

	function makeConnection()
	{
		try 
		{	
			$conn = new PDO("mysql:host=$servername;dbname=witherpv_hackathon", $username, $password);

			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			echo "Connected successfully"; 
			return $conn;
		}
		catch(PDOException $e)
		{
			echo "Connection failed: " . $e->getMessage();
			return false;
		}
	}

	function getConnection()
	{
		return makeConnection();
	}
	
	function getConnectionInfo()
	{
		$servername = "localhost";
		$username = "witherpv_job";
		$password = "flaporen";
		return array("mysql:host=$servername;dbname=witherpv_hackathon", $username, $password);
	}
?> 