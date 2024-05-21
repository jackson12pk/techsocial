<?php

use Doctrine\DBAL\DriverManager;

$config = new \Doctrine\DBAL\Configuration();
$connectionParams = [
    'url' => 'mysql://username:password@localhost/database',
];
$conn = DriverManager::getConnection($connectionParams, $config);

return $conn;