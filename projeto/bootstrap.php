<?php

require __DIR__."/vendor/autoload.php";
$router = require __DIR__."/router.php";

$object = $router->handler();

/*

Testando conexão com o banco

$pdo = null;

try {
    $pdo = new PDO('mysql:host=mysql;dbname=database', 'root', '123');
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    die();
}

var_dump($pdo);

*/

$controller = new $object['class'];
$action = $object['action'];
echo $controller->$action();