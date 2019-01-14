<?php

include_once __DIR__ . '../src/Client.php';
include_once __DIR__ . '../src/Response.php';

$client = new \Sen\Http\Client();

$response = $client->get('http://www.baidu.com');

var_dump($response->getStatusCode());

var_dump($response->getTransferInfo());

var_dump($response->getBody());