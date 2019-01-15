# Http

一个简单易用的PHP HTTP 客户端, 基于cURL封装

## 示例
```php
<?php

// require __DIR__ . '/../vendor/autoload.php';

require __DIR__ . '/src/ClassLoader.php';
\Sen\Http\ClassLoader::register();

$client = new \Sen\Http\Client();

$response = $client->get('http://www.baidu.com');

// http状态码 例如：200 404 等
var_dump($response->getStatusCode());

var_dump($response->getTransferInfo());

echo '<br>';

// 响应内容
$body = $response->getBody();
echo nl2br(htmlspecialchars($body));

// download
$response = $client->get('https://www.baidu.com/img/bd_logo1.png');
if ($response->getStatusCode() == 200) {
    file_put_contents('./bd.png', $response->getBody());
}
```