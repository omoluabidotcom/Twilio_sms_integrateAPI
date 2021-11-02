<?php
require __DIR__ . '/vendor/autoload.php';
use Twilio\Rest\Client;

$account_sid = 'ACda76ec689868862ad52ae402bb41be69';
$auth_token = 'dbecc5e278b3caf2fdb7ac9600790570';


$twilio_number = "+12057821554";

$client = new Client($account_sid, $auth_token);
$client->messages->create(
    
    '+2348164346318',
    array(
        'from' => $twilio_number,
        'body' => 'Second Twilio message using twilio api'
    )
);
