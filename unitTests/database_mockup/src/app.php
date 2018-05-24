<?php

include "vendor/autoload.php";

$server         = 'localhost';
$username = 'root';
$password = 'root'; //NOT secure, used this as a demo
$database  = 'application';

//Create the database object
$mysqliInstance = new mysqli($server, $username, $password, $database);
$database = new app\wrappers\MysqlDatabase($mysqliInstance);
$service = new app\services\UserService($database);

$result = $service->getUsers();


