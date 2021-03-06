<?php

require_once(__DIR__ . '/autoload.php');
function sendMessage($header,$msg,$phone)
{ 
	$MessageBird = new \MessageBird\Client('live_KfUwjrWdLWBa2rtOMLSErP81w'); // Set your own API access key here.
	//$MessageBird = new \MessageBird\Client('test_g13ekVBi5JskLaLa8AZ4htt3j'); // Set your own API access key here.

	$Message             = new \MessageBird\Objects\Message();
	$Message->originator = $header;

	$Message->recipients = array($phone);
	$Message->body = $msg;

	try {
		$MessageResult = $MessageBird->messages->create($Message);
		//var_dump($MessageResult);
		echo '{"response": "SUCCESS"}';

	} catch (\MessageBird\Exceptions\AuthenticateException $e) {
		echo '{"response": "WRONG_LOGIN"}';

	} catch (\MessageBird\Exceptions\BalanceException $e) {
		// That means that you are out of credits, so do something about it.
		echo '{"response": "NO_BALANCE"}';

	} catch (\Exception $e) {
		echo '{"response": "UNKNOW_ERROR"}';
		//echo $e->getMessage();
	}
}