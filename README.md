# Sen\Http

一个简单易用的PHP HTTP 客户端, 基于cURL封装

示例
```php
<?php

// require __DIR__ . '/../vendor/autoload.php';

require __DIR__ . '/../src/ClassLoader.php';
\Sen\Http\ClassLoader::register();

$client = new \Sen\Http\Client();

$response = $client->get('http://www.baidu.com');

var_dump($response->getStatusCode());

var_dump($response->getTransferInfo());

echo '<br>';

$body = $response->getBody();
echo nl2br(htmlspecialchars($body));
```