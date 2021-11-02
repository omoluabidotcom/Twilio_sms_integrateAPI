<?php
require __DIR__ . '/vendor/autoload.php';
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$account_sid = 'ACda76ec689868862ad52ae402bb41be69';
$auth_token = 'dbecc5e278b3caf2fdb7ac9600790570';
// In production, these should be environment variables. E.g.:
// $auth_token = $_ENV["TWILIO_AUTH_TOKEN"]

// A Twilio number you own with SMS capabilities
$twilio_number = "+12057821554";

$client = new Client($account_sid, $auth_token);
$client->messages->create(
    // Where to send a text message (your cell phone?)
    '+2348164346318',
    array(
        'from' => $twilio_number,
        'body' => 'Second Twilio message using twilio api'
    )
);
