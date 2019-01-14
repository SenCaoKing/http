<?php

// require __DIR__ . '/../vendor/autoload.php';

require __DIR__ . '/../src/ClassLoader.php';
\Sen\Http\ClassLoader::register();

$client = new \Sen\Http\Client();

$response = $client->get('http://www.baidu.com');

var_dump($response->getStatusCode());

var_dump($response->getTransferInfo());

var_dump($response->getBody());