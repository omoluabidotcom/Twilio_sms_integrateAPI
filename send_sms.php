<?php

declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use Twilio\Rest\Client;


$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$account_sid = $_ENV['TWILIOSID'];
$auth_token = $_ENV['TWILIOTOKEN'];


$twilio_number = $_ENV['TWILIONUMBER'];

$client = new Client($account_sid, $auth_token);
$client->messages->create(
    
    '+2348164346318',
    array(
        'from' => $twilio_number,
        'body' => 'Hello World'
    )
);
