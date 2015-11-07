<?php 
// Verstuur een ECHT sms-bericht om te testen naar je eigen telefoonnummer
// Normaal gesproken zou je hier alleen je access key toe moeten voegen,
// maar daar zorgen wij nu voor.
$MessageBird = new \MessageBird\Client('test_gshuPaZoeEG6ovbc8M79w0QyM');
// Laten we het bericht maken
$Message = new \MessageBird\Objects\Message();
$Message->originator = 'MessageBird';
$Message->recipients = array(0642065406);
$Message->body = 'Dit is een testbericht, verstuurd door MessageBird.com.';
// Bam! Verstuurd!
var_dump($MessageBird->messages->create($Message));