<?php

require_once(__DIR__ . '/autoload.php');
function sendMessage($header,$msg,$phone)
{
	$MessageBird = new \MessageBird\Client('test_g13ekVBi5JskLaLa8AZ4htt3j'); // Set your own API access key here.

	$Message             = new \MessageBird\Objects\Message();
	$Message->originator = $header;

	$Message->recipients = array($phone);
	$Message->body = $msg;

	try {
		$MessageResult = $MessageBird->messages->create($Message);
		var_dump($MessageResult);

	} catch (\MessageBird\Exceptions\AuthenticateException $e) {
		echo 'wrong login';

	} catch (\MessageBird\Exceptions\BalanceException $e) {
		// That means that you are out of credits, so do something about it.
		echo 'no balance';

	} catch (\Exception $e) {
		echo $e->getMessage();
	}
}